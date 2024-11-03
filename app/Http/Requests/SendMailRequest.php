<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class SendMailRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'message' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Yêu cầu không để trống",
            'name.string' => "Dữ liệu tên sai định dạng",
            'message.required' => "Yêu cầu không để trống",
            'message.string' => "Dữ liệu lời chúc sai định dạng",
        ];
    }

    /**
     * custom ajax request
     * @param Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $json = [
            'success' => false,
            'errors' => $validator->errors(),
            'message' => 'Failed Validation'
        ];
        $response = response( $json, 422 );
        throw (new ValidationException($validator, $response))->status(422);
    }
}
