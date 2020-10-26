<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function add()
    {
        return view('admin.create.top');
    }
    public function create(Request $requeest)
    {
        return redirect('admin/create/top');
    }
    public function add2()
    {
        return view('admin.create.inquiry');
    }
    public function create2(Request $requeest)
    {
        return redirect('admin/create/inquiry');
    }

}
