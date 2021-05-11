<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categories\StoreCategoriesRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('categories.index', compact('category'));
    }

    public function show(Category $category)
    {
//        $news = $category->news()->get();

        $news = News::where('category_id', $category->id)->get();
        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(StoreCategoriesRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('success', 'категория успешно добавлена');
    }


}
