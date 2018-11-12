<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    protected $article;

    public function __construct()
    {
    }

    /**
     * 文章主页
     *
     * @return mixed
     */
    public function index()
    {
        return view('front.index.index');
    }

    /**
     * 关于我
     *
     * @return mixed
     */
    public function about()
    {
        return view('about');
    }
}