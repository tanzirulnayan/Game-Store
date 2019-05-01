<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeveloperChangePasswordRequest extends FormRequest
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
            "OLD_PASSWORD"      => "required | min:4 | bail",
            "NEW_PASSWORD"      => "required | min:4 | bail",
            "CONFIRM_PASSWORD"      => "required | min:4 | bail",
        ];
    }

    public function messages(){

        return [
            'OLD_PASSWORD.required'=>'Password is required',
            'OLD_PASSWORD.min'=>'Password must be at least 4 character long',
            'NEW_PASSWORD.required'=>'New Password is required',
            'NEW_PASSWORD.min'=>'Password must be at least 4 character long',
            'CONFIRM_PASSWORD.required'=>'Confirm Password is required',
            'CONFIRM_PASSWORD.min'=>'Password must be at least 4 character long',
        ];
    }
}
