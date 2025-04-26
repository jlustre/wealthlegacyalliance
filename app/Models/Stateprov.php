<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stateprov extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'abbreviation',
        'country_id',
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
            'country_id' => 'integer',
        ];
    }
    /**
     * Get the country that owns the state or province.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    /**
     * Get the users that belong to the state or province.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
