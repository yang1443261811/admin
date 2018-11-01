<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class LinksController extends Controller
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
        return view('link.index');
    }

    public function create()
    {
        return view('link.create');
    }
}
