<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalInfo extends Model
{
    use HasFactory;
    protected $table = 'user_personal_info';

    protected $fillable = [
        'email',
        'name',
        'national_Id',
        'phone_number',
        'gender',
        'type',
        'age',
        'password',
        'date',
    ];
    // link this table with personal info table
    public function medicalInfo()
    {
        return $this->hasOne(UserMedicalInfo::class, 'user_id', 'id');
    }
}
