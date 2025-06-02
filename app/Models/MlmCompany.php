<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MlmCompany extends Model
{
    protected $fillable = [
        'name',
        'ceo_name',
        'main_office_location',
        'description',
        'logo',
        'website_link',
        'backoffice_link',
        'active',
    ];

    public function users()
    {
        return $this->hasMany(UserMlmStatus::class, 'mlm_company_id');
    }
}
