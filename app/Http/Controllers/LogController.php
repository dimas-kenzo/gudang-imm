<?php

namespace App\Http\Controllers;

use App\Models\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = log::all();
        return view('log.index', ['all'=>$all]);
    }
}
