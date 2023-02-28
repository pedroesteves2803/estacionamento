<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ParkingAdmin extends Authenticatable
{
    use HasFactory;

    // protected $table = 'parking_admin_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'parking_id',
    ];
}
