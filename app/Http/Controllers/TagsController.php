<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class TagsController extends Controller
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
        return view('tag.index');
    }

    public function create()
    {
        return view('tag.create');
    }
}
