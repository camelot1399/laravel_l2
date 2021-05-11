<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.index');
    }

    public function store(StoreFeedbackRequest $request)
    {
        $feedback = $request->validated();
        dd($feedback);
        return view('feedback.index');
    }
}
