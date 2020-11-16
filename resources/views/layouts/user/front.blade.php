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
    <script src="{{ asset('js/app.js') }}" defer></script>{{-- Laravel標準で用意されているJavascriptを読み込みます --}}
<!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">{{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="header">
        <div class="row">
            <div id="header left">
                <p class="header text">阪神間で口コミNo.1　骨盤矯正・交通事故施術で評判の整骨院</p>
                <a class="navbar brand" href="#">091整骨院</a>
            </div>
        </div>
        <div class="row">
            <div id="header right">
                <a class="tel">TEL ; 06-1234-5678</a><br>
                <a class="time">TEL予約受付時間 9:00～19:00 <span class="hot">日祝 休診</span></a><br>
                <a class="email">E-mail ; abc@xyz.ne.jp</a><br>
                <a class="web">WEB予約<span class="reception">24時間受付</span></a><br>
                <a href="reservation/create"></a>
            </div>
        </div>
    </div>
    <nav class="navbar bg-secondary navbar-expand-md">
        <div class="row">
            <div class="collapse navbar-collapse justify-content-start" id="navbarNav4">
                <ul class="navbar nav">
                    <li class="nav-item active">
                        <a class="nav-item nav-link active" href="#">TOP<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#">施術メニュー</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">お客様の声</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">お問合せ</a>
                    </li>
            </div>
            <div class="navbar nav navbar right">
                <a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            </div>
        </div>
</div>
</nav>
<div id="app">
</div>
<main class="py-4">
    @yield('content') {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
</main>
<footer class="footer">
    <div class="container">
        <p id="copyright">(C) Copyright 091整骨院.</p>
    </div>
</footer>
</div>
</body>
</html>