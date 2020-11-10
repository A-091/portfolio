{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
{{-- admin.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', 'STAFF TOPページ')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">STAFF TOP</div>
            <div class="card-body">
                <div>
                    <a href="{{ url('admin/user_list') }}" class="btn btn-primary">ユーザー一覧</a>
                </div>
                <form method="post" action="{{ url('admin/logout') }}">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="ログアウト" />
                </form>
            </div>
        </div>
    </div>
@endsection