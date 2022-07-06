<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;

class GetApiCep
{
    public static function getCep($cep)
    {
        $response = Http::get('https://viacep.com.br/ws/' . $cep . '/json/');

        if ($response->successful()) {
            $tmp = $response->json();

            if ((empty($tmp['uf']) && empty($tmp['localidade'])) ||
                (strlen($tmp['uf']) < 2 && strlen($tmp['localidade']) < 2)
            ) {
                return "O CEP " . $cep . " não existe!";
            }

            return $tmp;
        }

        return 'Incapaz de comunicar com o computador dos correios. Serviço temporariamente indisponível!';
    }
    public static function verifyCepValid($cep){
        $data = self::getCep($cep);
        if(is_array($data)){
           return true;
        }
        return false;
    }
}
