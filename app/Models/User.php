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

    // get stateprov abbreviation
    public function getStateprovAbbreviationAttribute(): string
    {
        return $this->stateprov->abbreviation ?? '';
    }
    public function getTimezoneAbbreviationAttribute(): string
    {
        return $this->timezone->abbreviation ?? '';
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
