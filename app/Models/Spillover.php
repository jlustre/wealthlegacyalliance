<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spillover extends Model
{
    protected $fillable = [
        'user_id',
        'mlm_company_id',
        'spillover_user_id',
        'spillover_date',
        'spillover_type', // e.g., left, right
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mlmCompany()
    {
        return $this->belongsTo(MlmCompany::class);
    }

    public function spilloverUser()
    {
        return $this->belongsTo(User::class, 'spillover_user_id');
    }
    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
    public function scopeByCompany($query, $companyId)
    {
        return $query->where('mlm_company_id', $companyId);
    }
    public function scopeBySpilloverUser($query, $spilloverUserId)
    {
        return $query->where('spillover_user_id', $spilloverUserId);
    }
    public function scopeBySpilloverType($query, $spilloverType)
    {
        return $query->where('spillover_type', $spilloverType);
    }
    public function scopeByDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('spillover_date', [$startDate, $endDate]);
    }
    public function scopeRecent($query, $days = 30)
    {
        return $query->where('spillover_date', '>=', now()->subDays($days));
    }
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
    public function scopeInactive($query)
    {
        return $query->where('active', false);
    }
    public function scopeWithUser($query)
    {
        return $query->with('user');
    }
    public function scopeWithSpilloverUser($query)
    {
        return $query->with('spilloverUser');
    }
    public function scopeWithCompany($query)
    {
        return $query->with('mlmCompany');
    }
    public function scopeWithAll($query)
    {
        return $query->with(['user', 'mlmCompany', 'spilloverUser']);
    }
}
