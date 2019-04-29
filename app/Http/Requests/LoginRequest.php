<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "USERNAME"=>"required | exists:login_credentials,USERNAME",
            "PASSWORD"=>"required | exists:login_credentials,PASSWORD",
        ];
    }

    public function messages(){

        return [
            'USERNAME.required'=>'The Username field is required',
            'PASSWORD.required'=>'The Password field is required',

        ];
    }


}
