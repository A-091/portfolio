<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add()
    {
        return view('admin.customer.index');
    }
    public function create(Request $request)
    {
        return redirect('admin/customer/index');
    }
}
