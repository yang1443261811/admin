<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display the dashboard page.
     *
     * @return mixed
     */
    public function index()
    {
        $links = Link::orderBy('created_at', 'desc')
            ->paginate(20);
        return view('link.index', ['links' => $links]);
    }

    public function create(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('link.create');
        }

        $this->validator($request);
        $result = (new Link)->fill($request->all())->save();
        return response()->json($result);
    }

    public function edit($id)
    {
        return view('link.update', ['link' =>  Link::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this->validator($request);
        $model = Link::find($id);
        $res = $model->fill($request->all())->save();
        return response()->json($res);
    }

    public function delete($id)
    {
        $result = Link::destroy($id);
        return response()->json($result);
    }

    /**
     * 验证文章字段
     *
     * @param Request $request
     * @return array
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

        return $this->validate($request, $rules, $messages);
    }
}
