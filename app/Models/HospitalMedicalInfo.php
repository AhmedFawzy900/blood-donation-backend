<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalMedicalInfo extends Model
{
    use HasFactory;
    protected $table = 'hospital_medical_info';

    protected $fillable = [
        'hospital_id',
        'count_A',
        'count_B',
        'count_O',
        'count_AB',
        'count_Ap',
        'count_Bp',
        'count_Op',
        'count_ABp',
        'location_latitude',
        'location_longitude',
    ];

    public function hospital()
    {
        return $this->belongsTo(HospitalPersonalInfo::class, 'hospital_id', 'id');
    }
}
