<?php

namespace App\Livewire\Users;

use App\Models\Country;
use App\Models\Stateprov;
use App\Models\Timezone;
use App\Models\User;
use Livewire\Component;

class UserForm extends Component
{
  public $name;
  public $email;
  public $firstname;
  public $lastname;
  public $sponsor_id;
  public $country_id;
  public $stateprov_id;
  public $timezone_id;
  public $password;
  public $phone;
  public $address;
  public $city;
  public $postalcode;
  public $avatar;
  public $status = 'active';
  public $role = 'user';
  public $password_confirmation;
  public $sponsors=[];
  public $countries=[];
  public $timezones=[];
  public $stateprovs =[];
  public $roles;
  public $statuses;

  public $editMode = false;
  public $userId = null;

  protected $rules = [
    'name' => [
        'required',
        'string',
        'max:30',
        'min:5',
        'unique:users,name',
        'regex:/^[a-z0-9_-]+$/', // Only lowercase, numbers, underscores, dashes
    ],
    'sponsor_id' => 'required|exists:users,id',
    'email' => 'required|email|max:255|unique:users,email',
    'password' => 'required|string|min:8|confirmed',
    'firstname' => 'required|string|max:35',
    'lastname' => 'required|string|max:35',
    'phone' => ['required', 'regex:/^[0-9]+$/'],
    'country_id' => 'required',
    'stateprov_id' => 'required',
    'timezone_id' => 'required',
    'role' => 'required',
    'status' => 'required',
  ];

  protected $messages = [
    'name.required' => 'Username field is required.',
    'name.regex' => 'Username must be lowercase, numbers, underscores, dashes.',
    'name.unique' => 'Username already exists.',
    'name.min' => 'Username must be at least 5 characters long.',
    'name.max' => 'Username should not exceed 30 characters long.',
    'sponsor_id.required' => 'Sponsor field is required.',
    'sponsor_exists.required' => 'Sponsor is invalid or inactive.',
    'stateprov_id.required' => 'State/Province field is required.',
    'country_id.required' => 'Country field is required.',
  ];

  public function mount()
  {
    $this->resetFields();
    $this->sponsors = User::where('status', 'active')->get();
    $this->countries = Country::where('isActive', '1')->get();
    $this->stateprovs = $this->getStateprov();
    $this->timezones = Timezone::where('is_active', '1')->get();
    $this->roles = ['admin', 'mentor', 'editor', 'user'];
    $this->statuses = ['active', 'pending', 'suspended', 'inactive'];
  }

  public function loadUser($id)
  {
    $user = User::findOrFail($id);
    $this->userId = $user->id;
    $this->editMode = true;
    $this->name = $user->name;
    $this->firstname = $user->firstname;
    $this->lastname = $user->lastname;
    $this->sponsor_id = $user->sponsor_id;
    $this->country_id = $user->country_id;
    $this->stateprov_id = $user->stateprov_id;
    $this->timezone_id = $user->timezone_id;
    $this->phone = $user->phone;
    $this->address = $user->address;
    $this->city = $user->city;
    $this->postalcode = $user->postalcode;
    $this->avatar = $user->avatar;
    $this->status = $user->status;
    $this->role = $user->role;
    $this->email = $user->email;
    $this->password = $user->password;
    $this->password_confirmation = $user->password;
  }

  public function updatedCountryId()
  {
    $this->stateprovs = $this->getStateprov();
    // $this->stateprov_id = null;
  }

  public function updatedName($value)
  {
    // Remove spaces and convert to lowercase
    $this->name = strtolower(str_replace(' ', '', $value));
  }

  public function updatedPhone($value)
  {
    // Remove all non-numeric characters
    $this->phone = preg_replace('/\D/', '', $value);
  }

  public function getStateprov()
  {
    if(!empty($this->country_id)) {
      // $this->stateprov_id = null;
      return Stateprov::where('country_id', $this->country_id)->get();
    } else {
      return [];
    }
  }

  public function createUser()
  {
    $this->validate();

    // Logic to create the user
    User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => bcrypt($this->password),
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'sponsor_id' => $this->sponsor_id,
        'country_id' => $this->country_id,
        'stateprov_id' => $this->stateprov_id,
        'timezone_id' => $this->timezone_id,
        'phone' => $this->phone,
        'address' => $this->address,
        'city' => $this->city,
        'postalcode' => $this->postalcode,
        'avatar' => $this->avatar,
        'status' => $this->status,
        'role' => $this->role,
    ]);

    session()->flash('status', 'User created successfully.');
    return redirect()->route('admin.users');
  }

  public function saveUser()
  {
    $data = [
        'name' => $this->name,
        'email' => $this->email,
        'password' => bcrypt($this->password),
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'sponsor_id' => $this->sponsor_id,
        'country_id' => $this->country_id,
        'stateprov_id' => $this->stateprov_id,
        'timezone_id' => $this->timezone_id,
        'phone' => $this->phone,
        'address' => $this->address,
        'city' => $this->city,
        'postalcode' => $this->postalcode,
        'avatar' => $this->avatar,
        'status' => $this->status,
        'role' => $this->role,
    ];

    $data = $this->validate($this->rules);
    $data['password'] = bcrypt($this->password);

    if ($this->editMode && $this->userId) {
        $user = User::findOrFail($this->userId);
        $user->update($data);
        session()->flash('status', 'User updated!');
    } else {
        User::create($data);
        session()->flash('status', 'User created!');
    }

    $this->resetFields();
  }

  public function deleteUser($id)
  {
      $user = User::findOrFail($id);
      $user->delete();

      session()->flash('status', 'User deleted successfully.');
      return redirect()->route('admin.users');
  }
  public function deleteSelectedUsers()
  {
      $this->validate([
          'selectedUsers' => 'required|array',
      ]);

      User::destroy($this->selectedUsers);

      session()->flash('status', 'Selected users deleted successfully.');
      return redirect()->route('admin.users');
  }
  public function updatedStatus($value)
  {
      $this->status = $value;
  }
  public function updatedRole($value)
  {
      $this->role = $value;
  }
  public function updatedAvatar($value)
  {
      $this->avatar = $value;
  }
  public function updatedEmail($value)
  {
      $this->email = strtolower($value);
  }


  public function resetFields()
  {
      $this->reset(['name', 'sponsor_id', 'email', 'password', 'password_confirmation',
          'firstname', 'lastname', 'phone', 'address', 'city', 'postalcode', 'avatar',
          'country_id', 'stateprov_id', 'timezone_id', 'status', 'role']);
  }

  //what is the purpose of the function below
  public function updated($propertyName)
  {
      $this->validateOnly($propertyName);
  }



  public function render()
  {
      return view('livewire.users.user-form');
  }
}

