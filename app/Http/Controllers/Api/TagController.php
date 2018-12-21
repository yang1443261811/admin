<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use App\Article;
use Illuminate\Http\Request;
use  App\Repositories\TagRepository;

class TagController extends ApiController
{
    protected $tag;

    public function __construct(TagRepository $tag)
    {
        parent::__construct();

        $this->tag = $tag;
    }

    /**
     * 主页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $tags = $this->tag->pageWithRequest($request);

        return view('back.tag.index', compact('tags', 'keyword'));
    }

    public function create()
    {
        return view('back.tag.create');
    }

    /**
     * Show all of the categories.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getList()
    {
        return $this->response->collection($this->tag->all());
    }

    /**
     * 新增
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validator($request);

        $this->tag->store($request->all());

        return response()->json(true);
    }

    /**
     * 删除
     *
     * @param int $id
     * @return Response
     */
    public function delete($id)
    {
        $result = Tag::destroy($id);

        return response()->json($result);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return mixed|resource
     */
    public function update(Request $request, $id)
    {
        if ($request->method() == 'GET') {
            return view('back.tag.update', ['tag' => Tag::find($id)]);
        } else {
            $input = $request->only('tag', 'title', 'meta_description');
            $this->tag->update($id, $input);

            return response()->json(true);
        }
    }


    /**
     * 设置验证规则
     *
     * @param Request $request
     * @return void
     */
    protected function validator(Request $request)
    {
        $this->validate($request, [
            'tag' => 'required|min:2|max:16',
            'title' => 'required|min:2|max:32',
            'meta_description' => 'required|max:255',
        ]);
    }
}
