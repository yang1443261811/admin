<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct()
    {
    }

    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $users = User::pageWithRequest($request);

        return view('back.user.index', compact('users', 'keyword'));
    }

    /**
     * 创建
     *
     * @return mixed
     */
    public function create()
    {
        return view('back.user.create');
    }

    /**
     * 存储用户数据
     *
     * @param UserRequest $request
     * @return mixed
     */
    public function store(UserRequest $request)
    {
        $data = array_merge($request->all(), [
            'password' => bcrypt($request->get('password')),
            'confirm_code' => str_random(64)
        ]);

        (new User)->fill($data)->save();

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
        return view('back.user.update', ['user' => User::find($id)]);
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
        $model = User::find($id);
        $result = $model->fill($request->all())->save();

        return response()->json($result);
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
     * 更改用户状态
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request, $id)
    {
        $input = $request->input();
        $result = User::where('id', $id)->update($input);

        return response()->json($result);
    }
}
