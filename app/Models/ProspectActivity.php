<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProspectActivity extends Model
{
    protected $fillable = [
        'prospect_id',
        'user_id',
        'activity_type', // e.g., call, email, meeting
        'activity_date',
        'notes',
    ];

    public function prospect()
    {
        return $this->belongsTo(Prospect::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
    public function scopeByProspect($query, $prospectId)
    {
        return $query->where('prospect_id', $prospectId);
    }
    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
    public function scopeByActivityType($query, $activityType)
    {
        return $query->where('activity_type', $activityType);
    }
    public function scopeByDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('activity_date', [$startDate, $endDate]);
    }
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }
    public function scopeCancelled($query)
    {
        return $query->where('status', 'cancelled');
    }
    public function scopeAssignedTo($query, $userId)
    {
        return $query->where('assigned_to', $userId);
    }
    public function scopeWithProspect($query)
    {
        return $query->with('prospect');
    }
    public function scopeWithUser($query)
    {
        return $query->with('user');
    }
    public function scopeWithAssignedUser($query)
    {
        return $query->with('assignedUser');
    }
    public function scopeWithAll($query)
    {
        return $query->with(['prospect', 'user', 'assignedUser']);
    }
}
