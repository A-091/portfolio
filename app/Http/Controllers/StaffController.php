<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        {
        $staff = auth()->staff();
        $this->authorize('viewAny', $staff);  // Policy をチェック
        $staff = Staff::get(); // 社員一覧を取得
        return view('staff.index', compact('staff')); // staff.index.bldae を呼出し、 staffを渡す
    }
    }
}
