<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
