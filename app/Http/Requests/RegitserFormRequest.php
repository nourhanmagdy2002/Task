<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegitserFormRequest extends FormRequest
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
            'username'=>'required|min:5',
            'phone'=>'required|unique:users,phone|min:11|max:11',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:7'
        ];
    }
}
