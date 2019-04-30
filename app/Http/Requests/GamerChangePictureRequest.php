<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamerChangePictureRequest extends FormRequest
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
            "G_IMAGE"           => "required | image | bail",
        ];
    }

    public function messages(){
        return [
            'G_IMAGE.required'=>'Image is required',
            'G_IMAGE.image'=>'Image must be JPG/PNG format',
        ];
    }
}
