<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        return view('dashboard.index');
    }
}
