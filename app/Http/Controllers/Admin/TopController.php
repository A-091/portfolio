<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Confirm;

class TopController extends Controller
{
    public function app()
    {
        return view('admin.create.top');
    }
    public function create(Request $requeest)
    {
        return redirect('admin/create/top');
    }

    /**
     * お問合せフォーム画面
     * 
     * Undocumented function
     *
     * @return void
     */
    public function input()
    {
        return view('admin.create.input');
    }


    /**
     * お問合せデータをDBに登録
     * Undocumented function
     *
     * @param Request $requeest
     * @return void
     */
    public function confirm(Request $requeest)
    {
        $this->validate($request, Confirm::$rules);
        $form = $request->all();
        

        // DBに値を保存する
        // Confirm::create();
        return redirect('admin/create/input');
    }

}
