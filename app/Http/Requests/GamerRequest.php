<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamerRequest extends FormRequest
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
            "G_NAME"            => "required | min:2 | bail",
            "G_EMAIL"           => "required | email | bail",
            "G_MOBILE"          => "required | numeric | bail",
            "G_DOB"             => "required | date | bail",
            "G_IMAGE"           => "required | image | bail",
        ];
    }

    public function messages(){
        return [
            'G_NAME.required'=>'Name is required',
            'G_NAME.min'=>'Name must be more than 2 characters',
            'G_EMAIL.required'=>'Email is required',
            'G_EMAIL.email'=>'Invalid email format',
            'G_MOBILE.required'=>'Mobile Number is required',
            'G_MOBILE.numeric'=>'Mobile Number must be Numbers',
            'G_DOB.required'=>'DOB is required',
            'G_DOB.date'=>'DOB must be a valid Date',
            'G_IMAGE.required'=>'Image is required',
            'G_IMAGE.image'=>'Image must be JPG/PNG format',
        ];
    }
}
