@extends('layouts.admin.admin')
@section('title', '管理マスタ')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="staff">
                    <h2>管理マスタ</h2>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>氏名</td>
                            <td>ロール</td>
                            <td>メール</td>
                        </tr>
                        </thead>
                        @foreach($users as $user)  {{-- Controllerから渡された users を foreach で回す --}}
                        <tr>
                            <td>{{ $user->name }}</td> {{-- 各要素を表示 --}}
                            <td>{{ $user->role->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection