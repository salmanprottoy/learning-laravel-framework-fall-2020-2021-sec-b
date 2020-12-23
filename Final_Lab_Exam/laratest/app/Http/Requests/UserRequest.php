<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3',
            'cgpa' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required'=> "can't left empty....",
            'name.min'=> "must be at least 3 ch...."
        ];
    }
}
