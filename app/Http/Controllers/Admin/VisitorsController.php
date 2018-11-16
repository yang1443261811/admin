<?php

namespace App\Http\Controllers\Admin;

use App\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Repositories\VisitorRepository;

class VisitorsController extends Controller
{
    protected $visitor;

    public function __construct(VisitorRepository $visitor)
    {
        $this->visitor = $visitor;
    }

    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $visitors = $this->visitor->pageWithRequest($request);

        return view('back.visitor.index', compact('visitors', 'keyword'));
    }
}