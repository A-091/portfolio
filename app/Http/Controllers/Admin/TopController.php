<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

}
