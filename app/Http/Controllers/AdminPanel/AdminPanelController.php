<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\StoreAdminPanelRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('adminpanel.index');
    }

    public function userList(User $user)
    {
        $users = User::get();
        return view('adminpanel.userList', compact('users'));
    }

    public function userEdit(User $user)
    {
        $rules = config('rules.rules');
        return view('adminpanel.userEdit', [
            'user' => $user,
            'rules' => $rules
        ]);
    }

    public function userUpdate(StoreAdminPanelRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->back()->with('success', 'Пользователь успешно изменен');
    }

    public function userDelete(User $user)
    {
        $user->delete($user);
        return redirect()->back()->with('success', 'Пользователь успешно удален');
    }

    public function news(News $news)
    {
        $news = News::with('category')->get();
        return view('adminpanel.news', compact('news'));
    }

    public function newsEdit(News $news)
    {
        $categories = Category::all();
        return view('adminpanel.newsEdit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }
}
