<?php

namespace App\Http\Controllers\Admin;

use App\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Repositories\LinkRepository;

class LinksController extends Controller
{
    protected $link;

    public function __construct(LinkRepository $link)
    {
        $this->link = $link;
    }

    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $links = $this->link->pageWithRequest($request);

        return view('back.link.index', compact('links', 'keyword'));
    }

    /**
     * 创建新记录
     *
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('back.link.create');
        }

        $this->validator($request);

        $this->link->store($request->all());

        return response()->json(true);
    }

    /**
     * 编辑
     *
     * @param int $id
     * @return mixed
     */
    public function edit($id)
    {
        return view('back.link.update', ['link' =>  Link::find($id)]);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->validator($request);

        $this->link->update($id, $request->all());

        return response()->json(true);
    }

    /**
     * 删除
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $result = Link::destroy($id);

        return response()->json($result);
    }

    /**
     * 更改用户状态
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request, $id)
    {
        $this->link->update($id, $request->input());

        return response()->json(true);
    }

    /**
     * 验证文章字段
     *
     * @param Request $request
     * @return void
     */
    protected function validator(Request $request)
    {
        $rules = [
            'name'  => 'bail|required',
            'link'  => 'bail|required',
            'image' => 'bail|required',
        ];
        $messages =  [
            'name.required'  => '名字必填',
            'link.required'  => '链接必填',
            'image.required' => '图片不能为空',
        ];

        $this->validate($request, $rules, $messages);
    }
}
