<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class UserMlmStatus extends Model
{
    protected $fillable = [
        'user_id',
        'mlm_company_id',
        'joined',
        'joined_at',
        'upline_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mlmCompany()
    {
        return $this->belongsTo(MlmCompany::class);
    }
    public function upline()
    {
        return $this->belongsTo(User::class, 'upline_id');
    }
    public function scopeActive($query)
    {
        return $query->where('joined', true);
    }
    public function scopeInactive($query)
    {
        return $query->where('joined', false);
    }
    public function scopeByCompany($query, $companyId)
    {
        return $query->where('mlm_company_id', $companyId);
    }
    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
    public function scopeJoinedAfter($query, $date)
    {
        return $query->where('joined_at', '>', $date);
    }
    public function scopeJoinedBefore($query, $date)
    {
        return $query->where('joined_at', '<', $date);
    }
    public function scopeWithUpline($query)
    {
        return $query->with('upline');
    }
    public function scopeWithCompany($query)
    {
        return $query->with('mlmCompany');
    }
    public function scopeWithUser($query)
    {
        return $query->with('user');
    }
    public function scopeWithAll($query)
    {
        return $query->with(['user', 'mlmCompany', 'upline']);
    }
}
