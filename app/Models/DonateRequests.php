<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonateRequests extends Model
{
    use HasFactory;
    protected $table = 'donate_requests';

    protected $fillable = [
        'from_id',
        'to_id',
        'status',
        'distance',
        'donor_type',
        'blood_type',
    ];
}
