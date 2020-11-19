@extends('layouts.admin.admin')
@section('title', '顧客マスタ')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="top">
                    <h2>管理TOP</h2>
                    <form action="{{ action('Admin\CustomerController@create') }}" method="post"
                          enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-2" for="title">顧客管理</label>
                            <ul>
                                        <li><a href="/customers">顧客一覧</a></li>
                                        <li><a href="/customers/create">顧客新規登録</a></li>
                                        <li><a href="/customer_search">顧客検索</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
