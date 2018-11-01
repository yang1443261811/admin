<?php
/**
 * Created by PhpStorm.
 * User: BL
 * Date: 2018/11/1
 * Time: 17:46
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SystemController extends Controller
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
        return view('system.index');
    }
}