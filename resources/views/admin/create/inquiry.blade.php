@extends('layouts.admin')
@section('title','お問合せフォーム')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>お問合せフォーム</h2>
            <p>お問合せフォームをご利用の際は、必ず下記「"<a href="#">個人情報保護方針</a>"」を一読ください。
            <br>内容に同意していただけましたら、下記フォームに必要事項をご入力の上、「入力確認画面へ」ボタンをクリックしてください。
            <br>なお、お問い合わせの内容によっては、ご返答が遅れる場合がございます。ご了承ください。
            </p>
            <form action="{{ action('Admin\TopController@create') }}" method="post"enctype="multipart/form-data">
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">お問合せ内容</label><br>
                    <span class="must">必須</span><br>
                    <div class="col-md-10">
                        <textarea class="form-control" name="contents" rows="20">{{ old('contents') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">お名前</label>
                    <span class="must">必須</span>
                    
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">電話番号</label>
                    <span class="must">必須</span>
                    <div class="col-md-10">
                        <input type="tel" class="form-control" name="tel" value="{{ old('tel') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">メールアドレス</label>
                    <span class="must">必須</span>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="確認画面へ">
            </form>
        </div>
    </div>
</div>
@endsection