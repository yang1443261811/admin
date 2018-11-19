<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Discussion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Repositories\DiscussionRepository;

class DiscussionsController extends Controller
{
    protected $discussion;

    public function __construct(DiscussionRepository $discussion)
    {
        $this->discussion = $discussion;
    }

    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $discussions =  $this->discussion->pageWithRequest($request);

        return view('back.discussion.index', compact('discussions', 'keyword'));
    }

    /**
     * 创建
     *
     * @return mixed
     */
    public function create()
    {
        return view('back.discussion.create', ['tags' => Tag::all()]);
    }

    /**
     * 存储数据
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validator($request);

        $input = array_merge($request->all(), [
            'user_id' => \Auth()->id(), 'last_user_id' => \Auth()->id()
        ]);

        $this->discussion->store($input);

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
        $tags = Tag::all();
        $discussion = $this->discussion->getById($id);

        return view('back.discussion.update', compact('tags', 'discussion'));
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

        $this->discussion->update($id, $request->all());

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
        $result = Discussion::destroy($id);

        return response()->json($result);
    }

    public function status(Request $request, $id)
    {
        $result =  $this->discussion->updateWithoutTags($id, $request->all());;

        return response()->json($result);
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
            'title' => 'bail|required|min:3',
            'content' => 'bail|required',
            'tags' => 'bail|required',
        ];
        $messages = [
            'title.required' => '标题必填',
            'title.min' => '标题至少三个字符',
            'content.required' => '文章内容必填',
            'tags.required' => '文章标签必填',
        ];

        $this->validate($request, $rules, $messages);
    }
}
