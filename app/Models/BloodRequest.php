<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;
    protected $table = 'blood_requests';

    protected $fillable = [
        'from_id',
        'to_id',
        'status',
        'distance',
        'donor_type',
        'donor_type',
        'sender_type',
        'hospital_address'
    ];
}
