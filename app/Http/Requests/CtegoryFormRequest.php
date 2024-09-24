<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CtegoryFormRequest extends FormRequest
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
            'name'=>'required|min:3',
            'question1'=>'required|min:10',
            'question2'=>'required|min:10',
            'question3'=>'required|min:10',
        ];
    }
}
