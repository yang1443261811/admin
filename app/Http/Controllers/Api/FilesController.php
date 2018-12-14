<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class FilesController extends ApiController
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
