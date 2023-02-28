<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
