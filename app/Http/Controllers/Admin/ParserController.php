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

        foreach ($data['news'] as $key => $value) {
            $newsItem = News::whereTitle($value)->first();

            $categoryNews = Category::whereName('xmlPars')->first();

            if (!$categoryNews) {
                $createCategory = Category::create([
                    'name' => 'xmlPars'
                ]);
            }

            $category = Category::whereName('xmlPars')->first();

            if (!$newsItem) {
                $news = News::create([
                    'title' => $value['title'],
                    'description' => $value['description'],
                    'category_id' => $category->id
                ]);
            }
        }

        return redirect()->route('news.index');

    }
}
