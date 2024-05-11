<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarRequests extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'car_requests';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'message',
        'status'
    ];
}
