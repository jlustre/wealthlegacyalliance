<?php

namespace App\Livewire\Auth;

use App\Models\Country;
use App\Models\Stateprov;
use App\Models\Timezone;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $firstname = '';
    public string $lastname = '';
    public string $password = '';
    public string $phone = '';
    public string $address = '';
    public string $city = '';
    public string $postalcode = '';

    public string $status = 'active';
    public string $role = 'user';
    public $sp;
    public $sponsor_id;
    public $sponsor = '';
    public $country_id;
    public $stateprov_id;
    public $stateprov;
    public $activeCountries = [];
    public $activeStateprovs = [];
    public $timezone_id;
    public string $last_login = '';
    public string $last_ip = '';

    public string $password_confirmation = '';

    public function mount()
    {
      $this->sp = request()->query('sp'); // Using the global helper for brevity
      $this->resolveSponsor();

      // Pre-populate country_id with the first active country if not already set
      $this->activeCountries = Country::where('isActive', 1)->orderBy('name')->get();
      $this->activeStateprovs = collect(); // Initialize with an empty collection
    }

    public function updatedCountryId($countryId)
    {
        // If a country is selected, fetch its states
        if ($countryId) {
            $this->stateprov_id= null; // Reset stateprov_id when country changes
            $this->stateprov = null; // Reset stateprov when country changes
            $this->activeStateprovs = Stateprov::where('country_id', $countryId)
              ->where('is_active', 1)
              ->orderBy('name')
              ->get();
        } else {
            // If no country is selected, clear the states
            $this->activeStateprovs = collect();
        }
    }

    protected function resolveSponsor()
    {
        if (is_numeric($this->sp)) {
            // If 'sp' is numeric, assume it's a sponsor_id
            $this->sponsor_id = (int) $this->sp; // Cast to integer for safety
            $sponsor = User::find($this->sponsor_id);

            if ($sponsor) {
                $this->sponsor = $sponsor->name;
            } else {
                $this->addError('sp', 'Sponsor with provided ID not found.');
                $this->sponsor_id = null; // Ensure sponsor_id is null if not found
                $this->sponsor = null; // Reset sponsor name if not found
            }
        } elseif (is_string($this->sp) && !empty($this->sp)) {
            // If 'sp' is a non-empty string, assume it's a username
            $this->sponsor = $this->sp;
            $sponsor = User::where('name', $this->sponsor)->first();

            if ($sponsor) {
                $this->sponsor_id = $sponsor->id;
            } else {
                $this->addError('sp', 'Sponsor with provided username not found.');
                $this->sponsor_id = null; // Ensure sponsor_id is null if not found
            }
        } else {
            // If 'sp' is empty or not a valid type
            $this->addError('sp', 'Invalid or empty sponsor parameter.');
            $this->sponsor_id = null;
        }
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:30', 'unique:'.User::class],
            'sponsor_id' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:30'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'postalcode' => ['nullable', 'string', 'max:10'],
            'status' => ['nullable', 'string', 'in:active,onhold,inactive,suspended'],
            'role' => ['nullable', 'string', 'in:admin,mentor,editor,user'],
            'country_id' => ['required', 'integer', 'exists:countries,id'],
            'stateprov_id' => ['required', 'integer'],
            'stateprov' => ['nullable'],
            'timezone_id' => ['nullable'],
            'last_ip' => ['nullable', 'string', 'max:30'],
            'password_confirmation' => ['required', 'string', 'same:password'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        if (empty($validated['last_login'])) {
          $validated['last_login'] = null;
        }

        event(new Registered(($user = User::create($validated))));

        // This is already been implemented in the previous line
        // if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail()) {
        //     $user->sendEmailVerificationNotification();
        // }

        Auth::login($user);
        // Set isOnline, last_login and last_ip after login
        $user->isOnline = 1;
        $user->last_login = now();
        $user->last_ip = request()->ip();
        $user->save();

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }

    public function getActiveUsersProperty()
    {
    return User::where('status', 'active')->orderBy('name')->get();
    }

    public function getTimezonesProperty()
    {
        return Timezone::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
