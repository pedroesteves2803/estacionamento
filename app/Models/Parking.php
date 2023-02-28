<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cnpj',
        'cep',
        'city',
        'address',
        'uf',
        'number',
        'complement',
        'total_vacancies',
        'vacancies_released',
    ];

    public function parkingAdmin(): HasMany
    {
        return $this->hasMany(ParkingAdmin::class);
    }
}
