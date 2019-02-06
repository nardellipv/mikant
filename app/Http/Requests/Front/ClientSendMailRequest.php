<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ClientSendMailRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nameClient' => 'required|min:5',
            'emailClient' => 'required|min:5',
            'mensaje' => 'required|min:10',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}
