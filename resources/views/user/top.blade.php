{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.user.front')
{{-- admin.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', 'TOPページ')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="app">
                    <table class="biz-hour">
                        <tbody>
                          <tr>
                            <th>受付時間</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th class="sat">土</th>
                            <th class="sun">日</th>
                          </tr>
                          <tr>
                            <td>8:00〜12:00</td>
                            <td>●</td><!-- 月 -->
                            <td>●</td><!-- 火 -->
                            <td>●</td><!-- 水 -->
                            <td>●</td><!-- 木 -->
                            <td>●</td><!-- 金 -->
                            <td>●</td><!-- 土 -->
                            <td>ー</td><!-- 日 -->
                          </tr>
                          <tr>
                            <td>13:00〜17:00</td>
                            <td>●</td><!-- 月 -->
                            <td>●</td><!-- 火 -->
                            <td>●</td><!-- 水 -->
                            <td>ー</td><!-- 木 -->
                            <td>●</td><!-- 金 -->
                            <td>●</td><!-- 土 -->
                            <td>ー</td><!-- 日 -->
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection