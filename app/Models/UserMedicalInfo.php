<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMedicalInfo extends Model
{
    use HasFactory;
    // link this table with medical info table
    public function user()
    {
        return $this->belongsTo(UserPersonalInfo::class, 'user_id', 'id');
    }

    protected $table = 'user_medical_info';
    
    protected $fillable = [
        'user_id',
        'surgery_last_3_months',
        'visted_dentist_last_3_months',
        'chronic_disease',
        'last_donate_time',
        'blood_type',
        'legal_to_donate',
        'note',
        'location_latitude',
        'location_longitude',
        'date',
    ];
}
