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
            'name' => 'required',
            'sake_category_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください。',
            'sake_category_id.numeric' => 'お好きなお酒のカテゴリーを選択してください。',
        ];
    }
}
