<?php

namespace App\Http\Controllers\Api;

use App\Discussion;
use Illuminate\Http\Request;
use App\Http\Requests\DiscussionRequest;
use  App\Repositories\DiscussionRepository;

class DiscussionController extends ApiController
{
    protected $discussion;

    public function __construct(DiscussionRepository $discussion)
    {
        parent::__construct();

        $this->discussion = $discussion;
    }

    /**
     * 首页
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getList(Request $request)
    {
        return $this->response->collection(
            $this->discussion->pageWithRequest($request)
        );
    }

    /**
     * 存储数据
     *
     * @param DiscussionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(DiscussionRequest $request)
    {
        $input = $request->all() + [
            'user_id'      => \Auth()->id(),
            'last_user_id' => \Auth()->id()
        ];

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
        return $this->response->item($this->discussion->getById($id));
    }

    /**
     * 更新
     *
     * @param DiscussionRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(DiscussionRequest $request, $id)
    {
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

    /**
     * 状态更新
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request, $id)
    {
        $result =  $this->discussion->updateWithoutTags($id, $request->all());

        return response()->json($result);
    }
}
