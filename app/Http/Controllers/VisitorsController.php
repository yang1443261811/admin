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
    public function index()
    {
        $visitors = Visitor::orderBy('created_at', 'desc')
            ->paginate(20);
        return view('visitor.index', compact('visitors'));
    }
}