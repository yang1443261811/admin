<?php

namespace App\Http\Controllers\Api;

use Image;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use Illuminate\Filesystem\Filesystem;

class UserController extends ApiController
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    public function index(Request $request)
    {
        return $this->response->collection($this->user->pageWithRequest($request));

    }

    /**
     * 存储用户数据
     *
     * @param UserRequest $request
     * @return mixed
     */
    public function create(UserRequest $request)
    {
        $data = array_merge($request->all(), [
            'password' => bcrypt($request->get('password')),
            'confirm_code' => str_random(64)
        ]);

        $this->user->store($data);

        return response()->json(true);
    }

    /**
     * 头像剪裁
     *
     * @param  Request $request
     * @return response
     */
    public function cropAvatar(Request $request, Filesystem $filesystem)
    {
        $currentImage = $request->input('image');

        $data = $request->input('data');

        $image = Image::make($currentImage['url']);

        $image->crop((int)$data['width'], (int)$data['height'], (int)$data['x'], (int)$data['y']);

        $filesystem->delete($currentImage['url']);
        $image->save($currentImage['url']);

        $this->user->saveAvatar(\Auth::id(), '/' . $currentImage['url']);

        return response()->json($currentImage);
    }

    /**
     * 更改用户状态
     *
     * @param Request $request
     * @param int int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request)
    {
        $id = $request->input('id');
        $status = $request->only('status');
        $this->user->update($id, $status);

        return response()->json(true);
    }

    /**
     * 删除
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $result = User::destroy($id);

        return response()->json($result);
    }

    /**
     * 编辑
     *
     * @param int $id
     * @return mixed
     */
    public function edit($id)
    {
        $user =  $this->user->getById($id);

        return response()->json($user);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->user->update($id, $request->all());

        return response()->json(true);
    }
}