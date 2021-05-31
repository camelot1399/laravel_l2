<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ParseNewsJob;

class ParserController extends Controller
{
    public function index()
    {
        $url = 'https://news.yandex.ru/army.rss';

        ParseNewsJob::dispatch($url);

        return view('dashboard');

    }
}
