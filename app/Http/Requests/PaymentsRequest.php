<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class PaymentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($this->routeIs('totalpayments.byCustomer')){

            return [
                'customerNumber'=>'required|exists:customers,customerNumber'
            ];
        }

        if($this->routeIs('allPayments.byDateRange')){
            return [
                'startDate'=>'required|date|exists:payments,paymentDate',
                'endDate'=>'required|date|exists:payments,paymentDate'

            ];
        }
    }
    public function messages()
    {
        return [
            'endDate.required'=>'End date is required',
            'startDate.required'=>'End date is required',
            'customerNumber.required'=>'Customer Number is required.',
            'endDate.date'=>'Enter a valid end date',
            'startDate.date'=>'Enter a valid start date'
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
