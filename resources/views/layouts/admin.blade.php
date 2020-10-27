<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">{{-- edgeに対応する --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">{{-- スマートフォンで見たときなどに文字や画像の大きさを調整 --}}
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
        </div>
            {{-- ここまでナビゲーションバー --}}
            <main class="py-4">
                @yield('content') {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            </main>    
        </div>
    </body>
</html>