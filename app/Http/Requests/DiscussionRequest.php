<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscussionRequest extends FormRequest
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
            'title'   => 'required|min:3',
            'content' => 'required',
            'tags'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'   => '标题必填',
            'title.min'        => '标题至少三个字符',
            'content.required' => '文章内容必填',
            'tags.required'    => '文章标签必填',
        ];
    }
}
