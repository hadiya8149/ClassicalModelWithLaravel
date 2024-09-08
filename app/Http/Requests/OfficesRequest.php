<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ShowOfficesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return true if user is admin
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($this->routeIs('offices.byState')){

            return [
                'state'=>'required|exists:offices,state'
            ];
        }

        if($this->routeIs('employees.byOffice')){
            return [
                'officeCode'=>'required'
            ];
        }
    }
    public function messages()
{
    return [
        'state.required'=>'State is required.',
        'state.exists'=>'State not found'
    ];
}
    protected function failedValidation(Validator $validator)
    {
        $errors = $this->validator->errors();
        $response =  response()->json([
            'validation errors'=>$errors,
        ]);
        throw new HttpResponseException($response);
    }
}
