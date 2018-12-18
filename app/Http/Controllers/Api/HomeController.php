<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Visitor;
use App\Article;
use App\Comment;
class HomeController extends ApiController
{
    /**
     * Display the dashboard page.
     *
     * @return mixed
     */
    public function statistics()
    {
        $users    = User::count();
        $visitors = Visitor::sum('clicks');
        $articles = Article::count();
        $comments = Comment::count();

        $data = compact('users', 'visitors', 'articles', 'comments');

        return response()->json($data);
    }
}