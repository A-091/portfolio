<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add()
    {
        return view('admin.customer.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/customer/create');
    }
}
