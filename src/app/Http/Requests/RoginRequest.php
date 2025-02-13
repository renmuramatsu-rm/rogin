<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Roginrequest extends FormRequest
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
            'name' => 'required|max:40',
            'gender' => 'required',
            'generation' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'generation.required' => '年代を選択してください',
            'email.required' => 'メールアドレスを入力してください',


        ];
    }
}
