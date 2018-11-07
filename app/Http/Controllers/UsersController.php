<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
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
        return view('user.index');
    }

    public function create()
    {
        return view('user.create');
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
}
