<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">{{-- edgeに対応する --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">{{-- スマートフォンで見たときなどに文字や画像の大きさを調整 --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">{{-- 全リクエストヘッダにトークンを追加 --}}
    <title>@yield('title')</title>{{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
<!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>{{-- Laravel標準で用意されているJavascriptを読み込みます --}}
<!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">{{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- 画面上部に表示するナビゲーションバーです。 --}}
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    </ul>
                </div>
            </div>
        </nav>
        {{-- ここまでナビゲーションバー --}}

        <main class="py-4">
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container">
                <p id="copyright">(C) Copyright 091整骨院.</p>
            </div>
        </footer>
    </div>
</body>
</html>