<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Image;
use App\User;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * 个人中心
     *
     * @return mixed
     */
    public function center($id)
    {
        $user = $this->user->getById($id);

        return view('user-center', compact('user'));
    }

    /**
     * 个人设置
     *
     * @return mixed
     */
    public function setting()
    {
        return view('setting');
    }

    /**
     * 用户个人资料
     *
     * @param Request $request
     * @return mixed
     */
    public function profile(Request $request)
    {
        if ($request->method() == 'POST') {
            $this->user->update(\Auth::id(), $request->all());
            return redirect()->back();
        } else {
            return view('profile', $this->user->getById(\Auth::id()));
        }

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
}