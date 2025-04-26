<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'abbreviation',
        'iso_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
        ];
    }

    /**
     * Get the users that belong to the country.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the states or provinces that belong to the country.
     */
    public function stateProvs()
    {
        return $this->hasMany(Stateprov::class);
    }
    /**
     * Get the timezones that belong to the country.
     */
    public function timezones()
    {
        return $this->hasMany(Timezone::class);
    }
}
