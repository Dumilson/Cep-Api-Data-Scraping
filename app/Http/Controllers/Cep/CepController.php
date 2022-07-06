<?php

namespace App\Http\Controllers\Cep;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCepRequest;
use App\Models\Cep;
use App\Utils\GetApiCep;
use App\Utils\Helper;
use Illuminate\Http\Request;

class CepController extends Controller
{
    protected $cep;

    public function __construct(Cep $cep)
    {
        $this->cep = $cep;
    }
    public function index(){
        $data = $this->cep->getAll();
        return Helper::returnApi("All CEPs",200,$data);
    }
    public function destroy($id){
        if(empty($id)){
            return Helper::returnApi("The id is required",422);
        }
        $stmt = $this->cep->remove($id);
        if($stmt){
            return Helper::returnApi("CEP successfully delete", 200);
        }
        return Helper::returnApi("Error when deleting",500);
    }

    public function get($id){        
        if(empty($id)){
            return Helper::returnApi("The id is required",422);
        }
        $data = $this->cep->get($id);
        if($data){
            return Helper::returnApi("Result",200,$data);
        }
        return Helper::returnApi("CEP  not found",404);
    }

    public function update(StoreUpdateCepRequest $request){
        $cep_verify = GetApiCep::verifyCepValid($request->cep);
        if($cep_verify == false){
            return Helper::returnApi("Check the CEP entered",404);
        }
        $data = $this->cep->get($request->id);
        if($data){
            $stmt = $this->cep->updateCep($request->id,$request->all());
            if($stmt){
                $updated_cep = $this->cep->get($request->id);
                return Helper::returnApi("CEP successfully updated",201,$updated_cep);
            }
            return Helper::returnApi("Error when updating",500);
        }
        return Helper::returnApi("CEP  not found",404);
    }
}
