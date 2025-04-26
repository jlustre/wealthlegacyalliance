<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'abbreviation',
        'offset',
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
     * Get the users that belong to the timezone.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    /**
     * Get the states or provinces that belong to the timezone.
     */
    public function stateProvs()
    {
        return $this->hasMany(Stateprov::class);
    }
    /**
     * Get the countries that belong to the timezone.
     */
    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
