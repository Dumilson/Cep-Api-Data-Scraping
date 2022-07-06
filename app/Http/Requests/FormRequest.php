<?php
namespace App\Http\Requests;

use App\Utils\Helper;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;

abstract class FormRequest extends LaravelFormRequest
{
	abstract public function rules();
	abstract public function authorize();
	
	protected function failedValidation(Validator $validator)
	{
		$errors = (new ValidationException($validator))->errors();
		
		throw new HttpResponseException(
			 Helper::returnApi("Validation Error",422,$validator->errors())
		);
	}

}
?>