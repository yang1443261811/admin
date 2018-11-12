<?php

namespace App\Http\Controllers;

use App\Repositories\DiscussionRepository;
use Illuminate\Http\Request;
use Validator;
use App\Tag;

class DiscussionController extends Controller
{
    protected $discussion;

    public function __construct(DiscussionRepository $discussion)
    {
        $this->middleware('auth')->except(['index', 'show']);

        $this->discussion = $discussion;
    }

    /**
     * 首页
     *
     * @return mixed
     */
    public function index()
    {
        $discussions = $this->discussion->page();

        return view('front.discussion.index', compact('discussions'));
    }

    /**
     * 创建讨论页面
     *
     * @return mixed
     */
    public function create()
    {
        return view('front.discussion.create', ['tags' => Tag::all()]);
    }

    /**
     * 存储讨论内容
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $input = $request->all() + ['user_id' => \Auth()->id(), 'last_user_id' => \Auth()->id()];

        $this->validator($input)->validate();

        $this->discussion->store($input);

        return redirect()->to('discussion');
    }

    /**
     * 展示一个讨论主题
     *
     * @param int $id
     * @return mixed
     */
    public function show($id)
    {
        $discussion = $this->discussion->getById($id);

        return view('front.discussion.show', compact('discussion'));
    }

    /**
     * 设置验证规则
     *
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title'   => 'required|min:2|max:128',
            'tags'    => 'required',
            'content' => 'required',
        ]);
    }
}