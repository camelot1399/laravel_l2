<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/category">Categories</a></li>
            </ul>
        </nav>
    </header>
    <h1>news</h1>

    <ul>
        @foreach($news as $newsItem)
            <li><a href="{{ route('news.show', ['news' => $newsItem]) }}">{{ $newsItem }}}</a></li>
        @endforeach
    </ul>
</body>
</html>
