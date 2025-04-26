<?php

namespace App\Livewire\Auth;

use App\Models\Country;
use App\Models\Stateprov;
use App\Models\Timezone;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    public string $sponsor_id = '';
    public string $country_id = '';
    public string $stateprov_id = '';
    public string $timezone_id = '';
    public string $last_login = '';
    public string $last_ip = '';

    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:30', 'unique:'.User::class],
            'sponsor_id' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'phone' => ['nullable', 'string', 'max:30'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'postalcode' => ['nullable', 'string', 'max:10'],
            'status' => ['nullable', 'string', 'in:active,onhold,inactive,suspended'],
            'role' => ['nullable', 'string', 'in:admin,mentor,editor,user'],
            'country_id' => ['nullable', 'string', 'max:30'],
            'stateprov_id' => ['nullable', 'string', 'max:30'],
            'timezone_id' => ['nullable', 'string', 'max:30'],
            'last_login' => ['nullable', 'string', 'max:30'],
            'last_ip' => ['nullable', 'string', 'max:30'],
            'password_confirmation' => ['required', 'string', 'same:password'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        // Send email verification
        if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
        }

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
    //modify the function below to get the isActive country
    public function getActiveCountriesProperty()
    {
        return Country::where('isActive', 1)->orderBy('name')->get();
    }
    //modify the function below to get the isActive stateprov
    public function getActiveStateprovsProperty()
    {
        // if (!$this->country_id) {
        //     return collect(); // Return empty if no country selected
        // }
        return Stateprov::where('is_active', 1)
            // ->where('country_id', $this->country_id)
            ->orderBy('country_id')
            ->orderBy('name')
            ->get();
    }

    public function updatedCountryId()
    {
        $this->country_id = '';
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
