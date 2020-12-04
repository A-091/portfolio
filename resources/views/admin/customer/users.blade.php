@extends('layouts.admin.admin')
@section('title', '顧客検索')
@section('content')

    <div class="container">
        <div class="row">
            <h2>顧客検索</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <form action="customer_search" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td>氏名</td>
                            <td>
                                <input type="text" name="name" value="{{isset($validated['name'])?$validated['name']:''}}"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" class="btn btn-primary">　　検　索　　</button>
                            </td>
                        </tr>
                    </table>
                </form>
                @include('errors')
            </div>
        </div>
        <br/>
        @if(!empty($customers))
            <div class="card">
                <div class="card-header">
                    <p>検索結果</p>
                    <ul>
                        @foreach($search_criterias as $criteria)
                            <li>{{$criteria}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach($customers as $customer)
                            <li>
                                <a href="/customers/{{$customer['id']}}">{{ $customer['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
@endsection
