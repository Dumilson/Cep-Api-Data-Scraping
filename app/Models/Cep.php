<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    use HasFactory;

    protected $table = "ceps";
    protected $fillable = [
        'id',
        'cep',
        'logradouro',
        'complemento',
        'bairro',
        'uf',
        'ibge',
        'gia',
        'ddd',
        'siafi'
    ];
    public $timestamps = false;

    public  function store(array $data){
        $stmt = $this->create($data);
        if($stmt){
            return $stmt;
        }
        return false;
    }

    public function getAll(){
        return $this->select('id','cep','uf','ddd')->paginate(5);
    }
    public function remove(int $id){
        return $this->find($id)->delete();
    }

    public function get(int $id){
        return $this->find($id);
    }

    public function updateCep(int $id, array $data){
        return $this->find($id)->update($data);
    }

}
