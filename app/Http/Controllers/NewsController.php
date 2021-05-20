<?php

namespace App\Http\Controllers;

use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\NewsShowRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::with('category')->get();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        $categories = Category::all();
        return view('news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    public function delete(News $news)
    {
        $news->delete($news);
        return redirect()->route('news.index')->with('success', 'Новость успешно удалена');
    }

    public function update(News $news, StoreNewsRequest $request)
    {
        $news->update($request->validated());
        return redirect()->route('news.index')->with('success', 'Новость успешно обновлена');
    }

    public function categoryNews(Category $category)
    {
        $news = News::where('category_id', $category->id)->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }

    public function store(StoreNewsRequest $request)
    {
//        $news = new News();
//        $news->category_id = $request->get('category_id');
//        $news->title = $request->get('title');
//        $news->description = $request->get('description');
//        $news->save();

//        dump($request->all());
//        dump($request->validated());
//
        News::create($request->validated());

        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена');
    }

}
