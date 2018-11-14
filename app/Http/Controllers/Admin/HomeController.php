<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Visitor;
use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display the dashboard page.
     * 
     * @return mixed
     */
    public function dashboard()
    {
        $users = User::count();
        $visitors = Visitor::sum('clicks');
        $articles = Article::count();
        $comments = Comment::count();

        $data = compact('users', 'visitors', 'articles', 'comments');

        return view('back.dashboard.index', $data);
    }
}
