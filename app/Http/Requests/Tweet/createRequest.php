<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class createRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //  ユーザ情報を判断してリクエストを認証できるか判定する
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

    // リクエストされる値を検証するための設定を記述
    // 今回は投稿の文字数を140文字までに制限、文章な必須など
    public function rules()
    {
        return [
            // required(必須の意味)
            'tweet' => 'required|max:140'
        ];
    }

    // 投稿したデータを取得するメソッド
    public function tweet(): string
    {
        // リクエストからデータを取得
        return $this->input('tweet');
    }
}
