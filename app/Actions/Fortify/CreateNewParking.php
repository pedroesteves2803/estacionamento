<?php

namespace App\Actions\Fortify;

use App\Contracts\CreateNewParking as ContractsCreateNewParking;
use App\Exceptions\ErrorCreateParking;
use App\Models\Parking;
use Exception;
use Illuminate\Support\Facades\Validator;

class CreateNewParking implements ContractsCreateNewParking
{
    public function create(array $input)
    {
        try{
            Validator::make($input, [
                'name' => ['required'],
                'cnpj' => ['required'],
                'cep' => ['required'],
                'city' => ['required'],
                'address' => ['required'],
                'uf' => ['required'],
                'number' => ['required'],
                'complement' => ['required'],
                'total_vacancies' => ['required'],
            ])->validate();

            return Parking::create([
                'name' => $input['name'],
                'cnpj' => $input['cnpj'],
                'cep' => $input['cep'],
                'city' => $input['city'],
                'address' => $input['address'],
                'uf' => $input['uf'],
                'number' => $input['number'],
                'complement' => $input['complement'],
                'total_vacancies' => $input['total_vacancies'],
            ]);
        }catch(Exception $e){
            return throw new ErrorCreateParking('Erro ao criar estacionamento.');
        }

    }
}
