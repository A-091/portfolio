{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
{{-- admin.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', '')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="wrapp">
                    <h1>阪神間で口コミNo.1　骨盤矯正・交通事故施術で評判の整骨院</h1>
                    <div class="header clearfix">
                        <div class="header_post1">
                            <title>091整骨院</title>
                        </div>
                        <div class="header_post2">
                            <a>TEL 06-1234-5678　TEL受付時間　9:00～19:00</a>
                            <a>ネット予約　24時間OK</a>
                            <a>E-mail abc@xyz.ne.jp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection