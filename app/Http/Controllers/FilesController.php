<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
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
        echo 123;
    }

    public function upload(Request $request)
    {
        if (!$request->hasFile('image')) {
            return response()->json(['success' => false, 'msg' => 'invalid file']);
        }

        $file = $request->file('image')->store(date('Ymd'));

        return response()->json(['success' => true, 'url' => 'uploads/' . $file]);
    }
}
