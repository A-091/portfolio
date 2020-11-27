@extends('layouts.admin.admin')
@section('title', '顧客マスタ')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="customer">
                    <h2>管理マスタ</h2>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">顧客管理</label>
                        <ul>
                            <li><a href="customer/create">顧客新規登録</a></li>
                            <li><a href="#">顧客検索</a></li>
                        </ul>
                    </div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>氏名</td>
                            <td>郵便番号</td>
                            <td>住所</td>
                        </tr>
                        </thead>
                        @foreach($customers as $customer)
                            <tr>
                                <td>
                                    <a href="/customers/{{ $customer->id }}">
                                        {{ $customer->name }}
                                    </a>
                                </td>
                                <td>{{ $customer->postal }}</td>
                                <td>{{ $customer->address }}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{--  pagenation link -------------------------------------------------------------------------------       --}}
                    <table width="100%">
                        <tr>
                            @if($customers->lastPage() > 1)
                                <td width="120px"><a href="{{ $customers->url(0) }}">最初のページへ</a></td>
                                <td width="120px">
                                    @if($customers->previousPageUrl())
                                        <a href="{{ $customers->previousPageUrl() }}">前のページへ</a>
                                    @endif
                                </td>
                                <td width="120px" style="text-align: center">{{ $customers->currentPage() }}
                                    / {{ $customers->lastPage() }}</td>
                                <td width="120px">
                                    @if($customers->nextPageUrl())
                                        <a href="{{ $customers->nextPageUrl() }}">次のページへ</a>
                                    @endif
                                </td>
                                <td width="120px"><a
                                            href="{{ $customers->url($customers->lastPage()) }}">最後のページへ</a>
                                </td>

                            @endif
                        </tr>
                    </table>
                    {{--  End of pagenation link -------------------------------------------------------------------------       --}}
                </div>
            </div>
        </div>
    </div>
@endsection
