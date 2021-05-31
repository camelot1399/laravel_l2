<?php

namespace App\Http\Controllers;

use App\Http\Requests\News\StoreNewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('adm.index', compact('categories'));
    }

    public function store(StoreNewsRequest $request)
    {
        News::create($request->validated());
        return redirect()->route('news.index')->with('success', 'Успешно добавлено!');
    }
}
