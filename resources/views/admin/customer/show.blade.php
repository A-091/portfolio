@extends('layouts.admin.admin')
@section('title', '顧客マスタ 詳細')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="customer">
                    <h2>管理マスタ 詳細</h2>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">顧客管理</label>
                        <div class="card-header">{{ $customer->name }}({{ $customer->id }})</div>
                        <p>郵便番号：{{ $customer->postal }}</p>
                        <p>住所：{{ $customer->address }}</p>
                        <p>メール：{{ $customer->email }}</p>
                        <p>電話番号：{{ $customer->phone }}</p>
                        <p>更新日：{{ $customer->created_at }}</p>
                        <p>登録日日：{{ $customer->updated_at }}</p>

                    </div>
                    <br/>
                    <div class="card">
                        <form action="/customers/{{$customer->id}}/logs" method="POST">
                            @csrf
                            Log: <input type="text" name="log" value="{{old('log')}}">
                            <button type="submit" class="btn btn-sm btn-outline-primary">投稿</button>
                        </form>

                    </div>
                    <br/>
                    <div class="card">
                        <ul>
                            @foreach($customer->customerLogs as $log)
                                <li>
                                    {{ $log->log }}<br/>
                                    記入時刻：{{ $log->created_at }} 記入者：{{ $log->user->name }}<br/>
                                    <br/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection