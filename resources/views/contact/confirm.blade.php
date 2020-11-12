@extends('layouts.user.front')
@section('title','お問合せ確認フォーム')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="form-group row">
                    <label>お問い合わせ内容 : </label>
                    <b>{!! nl2br(e($inputs['contents'])) !!}
                    <input name="contents" value="{{ $inputs['contents'] }}" type="hidden"></b>
                </div>
                <div class="form-group row">
                    <label>お名前 : </label>
                    <b>{{ $inputs['name'] }}
                    <input name="name" value="{{ $inputs['name'] }}" type="hidden"></b>
                </div>
                <div class="form-group row">
                    <label>電話番号 : </label>
                    <b>{{ $inputs['tel'] }}
                    <input name="tel" value="{{ $inputs['tel'] }}" type="hidden"></b>
                </div>
                <div class="form-group row">
                    <label>メールアドレス : </label>
                    <b>{{ $inputs['email'] }}
                    <input name="email" value="{{ $inputs['email'] }}" type="hidden"></b>
                </div>
                <div class="form-group row">
                    <button type="submit" name="action" value="back">入力内容修正</button>
                </div>
                <div class="form-group row">
                    <button type="submit" name="action" value="submit">送信する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection




