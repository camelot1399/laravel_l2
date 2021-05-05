<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminka</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="wrapper">
        <a href="/">Logo</a>

        <nav>
            <ul class="navHeader__ul">
                <li class="navHeader__li"><a class="navHeader__a" href="/">Home</a></li>
                <li class="navHeader__li"><a class="navHeader__a" href="/about">About</a></li>
                <li class="navHeader__li"><a class="navHeader__a" href="/news">News</a></li>
                <li class="navHeader__li"><a class="navHeader__a" href="/categories">Categories list</a></li>
                <li class="navHeader__li"><a class="navHeader__a" href="/auth">Auth</a></li>
                <li class="navHeader__li"><a class="navHeader__a" href="/adm">Adminka</a></li>
            </ul>
        </nav>
    </header>

    <main class="wrapper">
        <h1>add new news</h1>

        <form action="#">

            <label for="name">
                Name:
                <br>
                <input type="text" id="name" placeholder="name">
            </label>

            <br>
            <br>

            <label for="category">
                Category:
                <br>
                <input type="text" id="category" name="category" placeholder="category">
            </label>

            <br>
            <br>

            <label for="briefDescription">
                Brief Description:
                <br>
                <input type="text" id="briefDescription" name="briefDescription" placeholder="briefDescription">
            </label>

            <br>
            <br>

            <label for="description">
                Description:
                <br>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </label>

            <br>
            <br>

            <button type="submit">Send</button>

        </form>
    </main>

    <footer class="wrapper">
        footer
    </footer>

</body>
</html>
