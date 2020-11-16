@extends('layouts.admin.admin')
@section('title', '管理TOP')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="top">
                    <h2>管理TOP</h2>
                    <form action="{{ action('Admin\TopController@create') }}" method="post"
                          enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-2" for="title">091 システム管理</label>
                            <div class="form-group row">
                                <div class="reservation management">
                                    <p>予約マスタ</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="customer management">
                                    <p>顧客マスタ</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="authority management">
                                    <p>管理マスタ</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="attendance management">
                                    <p>勤怠マスタ</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="news management">
                                    <p>記事マスタ</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form management">
                                    <p>フォームマスタ</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="analysis management">
                                    <p>分析マスタ</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
