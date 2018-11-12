<?php

namespace App\Http\Controllers\Admin;

use App\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorsController extends Controller
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
        $visitors = Visitor::pageWithRequest($request);

        return view('visitor.index', compact('visitors', 'keyword'));
    }
}