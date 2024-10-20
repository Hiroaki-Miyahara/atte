<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{asset('css/top_header.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <h2>Atte</h2>
            </div>
            <div class="header__content">
                <ul class="header__list">
                    <li>
                        <a href="/">ホーム</a>
                    </li>
                    <li>
                        <a href="/attendance">日付一覧</a>
                    </li>
                    <li>
                        <a href="/logout">ログアウト</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__logo">
                <p>Att,inc.</p>
            </div>
        </div>
    </footer>
</body>
</html>
