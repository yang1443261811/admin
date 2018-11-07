<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display the dashboard page.
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