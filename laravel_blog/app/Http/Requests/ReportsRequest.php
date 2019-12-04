<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportsRequest extends FormRequest
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
            'title' => 'required|max:50',
            'contents' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'required' => '必須項目です',
            'title.max' => ':max文字以内で入力してください',
            'contents.max' => ':max文字以内で入力してください',
        ];
    }
}