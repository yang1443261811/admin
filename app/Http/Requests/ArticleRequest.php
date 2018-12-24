<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'    => 'bail|required|min:3',
            'subtitle' => 'bail|required|min:2',
            'content'  => 'bail|required',
            'category_id' => 'bail|required',
            'tags'       => 'bail|required',
            'page_image' => 'bail|required',
        ];
    }

    /**
     * 获取被定义验证规则的错误消息
     *
     * @return array
     * @translator laravelacademy.org
     */
    public function messages()
    {
        return [
            'title.required' => '标题必填',
            'title.min' => '标题至少三个字符',
            'subtitle.required' => '副标题必填',
            'subtitle.min' => '副标题至少三个字符',
            'content.required' => '文章内容必填',
            'category_id.required' => '文章分类必选',
            'tags.required' => '文章标签必填',
            'page_image.required' => '文章封面必填',
        ];
    }
}