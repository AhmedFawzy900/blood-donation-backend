<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalPersonalInfo extends Model
{
    use HasFactory;
    protected $table = 'hospital_personal_info';
    protected $fillable = ['name', 'email', 'password', 'phone_number', 'zip', 'city', 'type'];

    public function hospital()
    {
        return $this->hasOne(HospitalMedicalInfo::class,'hospital_id', 'id');
    }
}

