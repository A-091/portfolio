@extends('layouts.user.front')
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
            <form method="POST" action="{{ route('contact.confirm') }}">
                @csrf
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                <p>
                    <label for="contents">お問合せ内容</label><br>
                    <textarea name="contents" id="contents" >{{ old('contents') }}</textarea>
                </p>
                </div>
                <div class="form-group row">
                <p>
                    <label for="name">お名前</label><br>
                    <input type="text"  name="name" id="name" value="{{ old('name') }}" required>
                </p>
                </div>
                <div class="form-group row">
                <p>
                    <label for="tel">電話番号</label><br>
                    <input type="tel" name="tel" id="tel" value="{{ old('tel') }}" required>
                </p>
                </div>
                <div class="form-group row">
                <p>
                    <label for="email">メールアドレス</label><br>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                </p>
                </div>
                <div class="form-group row">
                <h3>個人情報保護方針</h3>
                <p>当サイトは、お客様の個人情報について、お客様の承諾が無い限り第三者に開示、提供を一切いたしません。
                    <br>お客様から個人情報をご提供していただき、お客様へのサービスにご利用させていただくことがあります。
                    <br>その目的以外には利用いたしません。
                    <br>そして、ご提供いただいた個人情報を取り扱うにあたり管理責任者を置き、適切な管理を行っております。
                </p>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="確認画面へ">
            </form>
        </div>
    </div>
</div>
@endsection