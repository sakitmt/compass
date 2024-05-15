<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|max:30',
            'under_name_kana' => 'required|string|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|max:30',
            'mail_address' => 'required|email|unique:users|max:100',
            'sex' => 'required|integer|between:1,3',
            'old_year' => 'required|date_format:Y|after:2000/1/1',
            'old_month' => 'required|date_format:m',
            'old_day' => 'required|date_format:d',
            'role' => 'required|integer|between:1,4',
            'password' => 'required|min:8|max:30|confirmed'
        ];
    }
    public function messages(){
        return [
            'over_name.max' => '※姓は10文字以内で入力してください。',
            'under_name.max' => '※名は10文字以内で入力してください。',
            'over_name_kana.regex' => '※セイはカタカナで入力してください。',
            'over_name_kana.max' => '※セイは30文字以内で入力してください。',
            'under_name_kana.regex' => '※メイはカタカナで入力してください。',
            'under_name_kana.max' => '※メイは30文字以内で入力してください。',
            'mail_address.email' => '※メールアドレスの形式を確認してください。',
            'mail_address.unique' => '※すでに登録されているメールアドレスです。',
            'mail_address.max' => '※メールアドレスは100文字以下で入力してください。',
            'old_year.after' => '※2000年1月1日以降で設定してください。',
            'password.min' => '※パスワードは8文字以上で設定してください。',
            'password.max' => '※パスワードは30文字以内で設定してください。',
            'password.confirmed' => '※パスワードと確認用パスワードが一致していません。'
        ];
    }
}