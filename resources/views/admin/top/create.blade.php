@extends('layouts.admin.admin')
@section('title', '管理TOP')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto">
                <div class="top">
                    <h2>管理TOP</h2>
                    <form action="{{ action('Admin\TopController@create') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-2" for="title">091 システム管理</label>
                            <div class="form-group row">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                                </div>
                            @endif
                                <ul>
                                        <li><a href="/#">予約マスタ</a></li>
                                        <li><a href="/#">顧客マスタ</a></li>
                                        <li><a href="/#">管理マスタ</a></li>
                                        <li><a href="/#">勤怠マスタ</a></li>
                                        <li><a href="/#">記事マスタ</a></li>
                                        <li><a href="/#">フォームマスタ</a></li>
                                        <li><a href="/#">分析マスタ</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
