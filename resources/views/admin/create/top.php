{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
{{-- admin.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', '')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="app">
                    <div class="headerWrapper">
                        <div id="header">
                            <div class="seo">阪神間で口コミNo.1　骨盤矯正・交通事故施術で評判の整骨院</div>
                            <title class="title">091整骨院<a href="top.cleate"></a></title>
                            <div class="headerAddress">
                                <p class="tel">06-1234-5678</p>
                                <p clas="time">TEL予約受付時間 9:00～19:00 <span class="hot">日祝 休診</span></p>
                                <p class="email">abc@xyz.ne.jp</p>
                            </div>
                            <div class="reservation">
                                <p class="web">WEB予約<span class="reception">24時間受付</span>
                                <a href="reservation.cleate"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">TOPページ <span class="sr-only">(current)></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">施術メニュー</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">お客様の声</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">お問合せ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ログイン</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection