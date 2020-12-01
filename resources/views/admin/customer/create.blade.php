@extends('layouts.admin.admin')
@section('title', '顧客マスタ 新規登録')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="customer">
                    <h2>顧客マスタ 新規登録</h2>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">顧客管理</label>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">顧客新規登録</div>
                                    <form action="customer" method="POST">
                                        @csrf
                                        <p>氏名：<input type="text" name="name" value="{{ old('name') }}"></p>
                                        <p>郵便番号：<input type="text" name="postal" value="{{ old('postal') }}"></p>
                                        <p>住所：<input type="text" name="address" value="{{ old('address') }}"></p>
                                        <p>メール：<input type="text" name="email" value="{{ old('email') }}"></p>
                                        <p>電話番号：<input type="text" name="phone" value="{{ old('phone') }}"></p>
                                        <p style="text-align: center">
                                            <button class="btn btn-primary" type="submit">　　登　録　　</button>
                                        </p>
                                    </form>
                                    {{-- エラーを表示--}}
                                    @if( $errors->any() )
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
@endsection