@extends('layouts.admin')
@section('title','お問合せ完了')
@section('content')
お問い合わせ内容を受け付けました。<br>
<br>
■お問い合わせ内容<br>
{!! nl2br($contents) !!}<br>
<br>
■お名前<br>
{!! $name !!}<br>
<br>
■電話番号<br>
{!! $tel !!}<br>
<br>
■メールアドレス<br>
{!! $email !!}<br>
@endsection
