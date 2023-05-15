<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "phone"=>"required|min:11|max:11",
            "password"=>"required|max:10|min:4",
            "name"=>"required|min:4",
            "confirmpassword"=>"required|same:password"
        ];
    }
}
