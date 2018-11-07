<?php

namespace App\Http\Controllers;

use App\User;
use App\Visitor;
use App\Article;
use App\Comment;
use Illuminate\Http\Request;

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

        return view('dashboard.index', $data);
    }
}
