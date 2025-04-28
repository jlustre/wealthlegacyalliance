<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
        'ip_address',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function getStatusAttribute($value)
    {
        return $value ?: 'new';
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value ?: 'new';
    }
    public function getIpAddressAttribute($value)
    {
        return $value ?: request()->ip();
    }
    public function setIpAddressAttribute($value)
    {
        $this->attributes['ip_address'] = $value ?: request()->ip();
    }
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }
    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }
}
