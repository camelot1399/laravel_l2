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
        return view('News/news');
    }

    public function newsId()
    {
        return view('News/newsId', ['id' => $this->id]);
    }
}
