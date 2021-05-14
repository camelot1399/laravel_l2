<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.index');
    }

    public function store(StoreFeedbackRequest $request)
    {
//        $feedback = $request->validated();

//        $data = [
//            'name' => $request->validated()->name,
//            'description' => $request->validated()->description,
//        ];

        Feedback::create($request->validated());
        return redirect()->route('feedback.index')->with('success', 'Feedback успешно отправлен!');
    }
}
