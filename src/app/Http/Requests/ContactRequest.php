<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:255', 
            'gender' =>'required', 
            'email' =>'required|email|max:255', 
            'tel' =>'required|numeric|digits_between:10,11', 
            'postcode' =>'required|string|max:8', 
            'address' =>'required|string|max:255',
            'building' =>'nullable|string|max:255',
            'category_id' =>'required|exists:categories,id', 
            'detail' =>'required|string|max:120', 

            //
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'name.max' =>'お名前は255文字以内で入力してください',
            'gender.required' =>'性別を選択してください',
            'email.required' =>'メールアドレスを入力してください',
            'email.email' =>'正しいメールアドレス形式で入力してください',
            'tel.required' =>'電話番号を入力してください',
            'tel.numeric' =>'電話番号は数字で入力してください',
            'tel.digits.between' =>'電話番号は10～11桁で入力してください',
            'postcode.required' =>'郵便番号を入力してください',
            'address.required' =>'住所を入力してください',
            'category_id_required' =>'お問い合わせの種類を選択してください',
            'detail.required' =>'お問い合わせ内容を入力してください',
            'detail.max' =>'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
