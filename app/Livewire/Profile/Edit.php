<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postalcode;
    public $country_id;
    public $stateprov_id;
    public $stateprov;
    public $timezone_id;
    public $avatar;
    public $bio;

    protected $rules = [
        'name' => 'required|string|max:255',
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:100',
        'postalcode' => 'nullable|string|max:20',
        'country_id' => 'nullable|integer',
        'stateprov_id' => 'nullable|integer',
        'stateprov' => 'nullable|string|max:100',
        'timezone_id' => 'nullable|integer',
        'avatar' => 'nullable|image|max:2048', // Max 2MB
        'bio' => 'nullable|string|max:500', // Bio can be up to 500 characters
    ];
    public function updateAvatar()
    {
      $this->validate([
        'avatar' => 'nullable|image|max:2048',
      ]);

      if ($this->avatar && is_object($this->avatar)) {
        $avatarPath = $this->avatar->store('avatars', 'public');
        $user = auth()->user();
        $user->update(['avatar' => $avatarPath]);
        session()->flash('success', 'Avatar updated successfully.');
      } else {
        session()->flash('error', 'Please select a valid avatar image.');
      }
    }
    public function updateProfile()
    {
      $validatedData = $this->validate();

      $user = auth()->user();
      $user->update($validatedData);

      session()->flash('success', 'Profile updated successfully.');
    }

  public function render()
    {
        return view('livewire.profile.edit');
    }
}
