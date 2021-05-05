<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth</title>
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
        <h1>Auth</h1>

        <form action="/adm">
            <label for="login">
                Login:
                <input type="text" name="login" placeholder="login" id="login" required>
            </label>
            <br>
            <label for="password">
                Password:
                <input type="password" name="password" placeholder="password" id="password" required>
            </label>
            <br>
            <label for="saveMe">
                Запомнить меня:
                <input type="checkbox" name="saveMe" id="saveMe">
            </label>
            <br>
            <button type="submit">Войти</button>
        </form>
    </main>

    <footer class="wrapper">
        footer
    </footer>
</body>
</html>
