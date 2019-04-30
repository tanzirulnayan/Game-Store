<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupDeveloperRequest extends FormRequest
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
            "USERNAME"                   => "required | bail | unique:login_credentials,USERNAME",
            "DEV_NAME"                   => "required | bail | min:2",
            "DEV_DESCRIPTION"            => "required | bail",
            "DEV_ADDRESS"                => "required | bail",
            "DEV_EMAIL"                  => "required | bail | email",
            "DEV_WEBSITE"                => "required | bail",
            "DEV_CREDIT_CARD"            => "required | bail | numeric",
            "PASSWORD"                   => "required | bail |  min:4",
            "CONFIRM_PASSWORD"           => "required | bail | bail",
            "DEV_LOGO"                   => "required | image",
            
        ];
    }

    public function messages(){
        return [
            'USERNAME.required'=>'Username is required',
            'USERNAME.unique'=>'Username must be unique',
            'DEV_NAME.required'=>'Name is required',
            'DEV_NAME.min'=>'Name must be more than 2 characters',
            'DEV_DESCRIPTION.required'=>'Description is required',
            'DEV_ADDRESS.required'=>'Address is required',
            'DEV_EMAIL.required'=>'Email is required',
            'DEV_EMAIL.email'=>'Invalid email format',
            'DEV_WEBSITE.required'=>'Website is required',
            'DEV_CREDIT_CARD.required'=>'Credit Card Number is required',
            'DEV_CREDIT_CARD.numeric'=>'Credit Card No. must be Numeric',
            'G_DOB.required'=>'DOB is required',
            'G_DOB.date'=>'DOB must be a valid Date',
            'PASSWORD.required'=>'Password is required',
            'PASSWORD.min'=>'Password must be at least 4 character long',
            'CONFIRM_PASSWORD.required'=>'Confirm Password is required',
            'CONFIRM_PASSWORD.min'=>'Password must be at least 4 character long',
            'DEV_LOGO.required'=>'Image is required',
            'DEV_LOGO.image'=>'Image must be JPG/PNG format',
        ];
    }


}
