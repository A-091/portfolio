<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    
    public function add()
    {
        return view('admin.top.create');
    }
    public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/top/create');
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
  }
 }
