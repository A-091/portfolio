<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
    * 認証関係の判定を行う場合はここに処理を記述する。
     * 特にない場合は常にtrueを返しておく。
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
    public function rules() {
        return [
            'contents' => 'required',
            'name' => 'required|max:10',
            'tel' => 'required|numeric',
            'email' => 'required|email|max:100',
        ];
    }
}
