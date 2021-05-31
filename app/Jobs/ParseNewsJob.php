<?php

namespace App\Jobs;

use App\Models\Category;
use App\Models\News;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParseNewsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $url;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $xml = XmlParser::load($this->url);
        $data = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,link,description]'
            ]
        ]);

        $titles = array_map(function($news) {
            return $news['title'];
        }, $data['news']);

        $newsTitles = News::whereIn('title', $titles)->get();
        $categoryNews = Category::whereName('xmlPars')->first();

        if (!$categoryNews) {
            $categoryNews = Category::create([
                'name' => 'xmlPars'
            ]);
        }

        $newsToCreate = [];
        foreach ($data['news'] as $news) {
            if($newsTitles->where('title', $news['title'])->isNotEmpty()) {
                continue;
            }

            $newsToCreate[] = [
                'title' => $news['title'],
                'description' => $news['description'],
                'category_id' => $categoryNews->id,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ];
        }

        News::insert($newsToCreate);
    }
}
