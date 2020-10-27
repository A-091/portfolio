{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
{{-- admin.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', '091整骨院')
@include('layouts.header')
@include('layouts.navbar')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="app">
                </div>
            </div>
        </div>
    </div>
@endsection