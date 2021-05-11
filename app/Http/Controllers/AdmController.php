<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('adm.index', compact('categories'));
    }
}
