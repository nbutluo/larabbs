<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => '评论内容不可以是空的哦',
            'content.min' => '评论字数不能少于2个哟'
        ];
    }
}
