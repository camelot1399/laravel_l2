<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $id;

    public function __construct()
    {
        $this->id = 3;
    }
    public function index()
    {
        return view('news.index');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
