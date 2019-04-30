<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamerChangePasswordRequest extends FormRequest
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
            "old_password"      => "required | min:4 | bail",
            "new_password"      => "required | min:4 | bail",
            "con_password"      => "required | min:4 | bail",
        ];
    }

    public function messages(){

        return [
            'old_password.required'=>'Password is required',
            'old_password.min'=>'Password must be at least 4 character long',
            'new_password.required'=>'New Password is required',
            'new_password.min'=>'Password must be at least 4 character long',
            'con_password.required'=>'Confirm Password is required',
            'con_password.min'=>'Password must be at least 4 character long',
        ];
    }
}
