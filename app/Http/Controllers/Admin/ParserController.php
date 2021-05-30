<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use PHPUnit\Util\Xml;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {

        $xml = XmlParser::load('https://news.yandex.ru/army.rss');
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

        return view('dashboard');

    }
}
