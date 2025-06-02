<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'email',
        'phone',
        'city',
        'country_id',
        'stateprov_id',
        'timezone_id',
        'source',
        'priority', // e.g., high, medium, low
        'notes',
        'status',
        'assigned_to',
    ];

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
