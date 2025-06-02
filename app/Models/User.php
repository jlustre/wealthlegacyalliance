<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, CanResetPassword, SoftDeletes, MustVerifyEmailTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'sponsor_id',
        'firstname',
        'lastname',
        'email',
        'password',
        'phone',
        'address',
        'city',
        'postalcode',
        'country_id',
        'stateprov_id',
        'stateprov',
        'timezone_id',
        'avatar',
        'isOnline',
        'last_login',
        'last_ip',
        'role',
        'status',
        'bio'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //create function for hasVerifiedEmail
    public function hasVerifiedEmail(): bool
    {
        return ! is_null($this->email_verified_at);
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }
    /**
     * Get the user's full name
     */
    public function getFullnameAttribute(): string
    {
        return Str::of($this->firstname . ' ' . $this->lastname)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->title())
            ->implode(' ');
    }

    //get the formatted phone attribute in (999) 999-9999 format
    public function getFormattedPhoneAttribute(): ?string
    {
      if (!$this->phone) {
        return null;
      }
      // Remove all non-numeric characters
      $digits = preg_replace('/\D+/', '', $this->phone);

      // Format if 10 digits
      if (strlen($digits) === 10) {
        return sprintf('(%s) %s-%s',
          substr($digits, 0, 3),
          substr($digits, 3, 3),
          substr($digits, 6, 4)
        );
      }

      // Return original if not 10 digits
      return $this->phone;
    }

    //get join date in a human readable format
    public function getJoinDateAttribute(): string
    {
        return $this->created_at->diffForHumans();
    }

    public function getLastLoginHumanAttribute(): ?string
    {
      return $this->last_login ? \Carbon\Carbon::parse($this->last_login)->diffForHumans() : null;
    }

    //get location attribute
    public function getLocationAttribute()
    {
        $city = $this->city;

        // Try to resolve stateprov relation, fallback to raw value
        $state = '';
        if ($this->relationLoaded('stateprov') && $this->stateprov) {
            $state = $this->stateprov->abbreviation ?? $this->stateprov->name ?? '';
        } elseif ($this->stateprov_id && $this->stateprov) {
            $state = is_object($this->stateprov)
                ? ($this->stateprov->abbreviation ?? $this->stateprov->name ?? '')
                : $this->stateprov;
        } elseif (!empty($this->stateprov)) {
            $state = $this->stateprov;
        }

        // Try to resolve country relation, fallback to raw value
        $country = '';
        if ($this->relationLoaded('country') && $this->country) {
            $country = $this->country->name ?? $this->country->iso3 ?? '';
        } elseif ($this->country_id && $this->country) {
            $country = is_object($this->country)
                ? ($this->country->name ?? $this->country->iso3 ?? '')
                : $this->country;
        } elseif (!empty($this->country)) {
            $country = $this->country;
        }

        $parts = array_filter([$city, $state, $country]);
        return implode(', ', $parts);
    }

    /**
     * Get the user sponsor's name by using sponsor_id from the users table
     * @return string
     */
    public function getSponsorNameAttribute(): string
    {
        return User::where('id', $this->sponsor_id)->first()->name;
    }

    /**
     * Get the user sponsor's id by using name from the users table
     * @return int
     */
    public function sponsorId(string $name): int
    {
        return User::where('name', $name)->first()->id;
    }
    /**
     * Get the user sponsor's id by using email from the users table
     * @return int
     */
    public function sponsorIdByEmail(string $email): int
    {
        return User::where('email', $email)->first()->id;
    }

    // get country iso3
    public function getCountryIso3Attribute(): string
    {
        return $this->country->iso3 ?? '';
    }

    //get stateprov
    public function getStateprovNameAttribute(): string
    {
        return $this->stateprov && is_object($this->stateprov)
            ? ($this->stateprov->name ?? '')
            : ($this->stateprov ?? '');
    }

    // get stateprov abbreviation
    public function getStateprovAbbreviationAttribute(): string
    {
        return $this->stateprov->abbreviation ?? '';
    }
    public function getTimezoneAbbreviationAttribute(): string
    {
        return $this->timezone->abbreviation ?? '';
    }

    public function getIsOnlineAttribute(): string
    {
        // Example: online if last_login within 5 minutes
        if ($this->last_login && \Carbon\Carbon::parse($this->last_login)->gt(now()->subMinutes(5))) {
            return 'Yes';
        }
        return 'No';
    }

    public function getUserRoleAttribute(): string
    {
      return isset($this->attributes['role']) ? ucfirst($this->attributes['role']) : '';
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function stateprov()
    {
        return $this->belongsTo(Stateprov::class);
    }
    public function timezone()
    {
        return $this->belongsTo(Timezone::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isMentor(): bool
    {
        return $this->role === 'mentor';
    }

    public function isEditor(): bool
    {
        return $this->role === 'editor';
    }

    public function getIsAdminAttribute(): bool
    {
      return $this->isAdmin();
    }
    public function getIsMentorAttribute(): bool
    {
      return $this->isMentor();
    }
    public function getIsEditorAttribute(): bool
    {
      return $this->isEditor();
    }

}
