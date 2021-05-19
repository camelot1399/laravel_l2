<?php

namespace App\Observers;

use App\Models\News;

class NewsObserver
{
    public function creating(News $news)
    {
        \Log::info("model is creating, ID: {$news->id}");
    }

    public function created(News $news)
    {
        \Log::info("model is created, ID: {$news->id}");
    }
}
