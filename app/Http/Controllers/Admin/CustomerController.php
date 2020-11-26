<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate();
        return view('admin.customer.index', ['customers' => $customers]);
        
    }
    public function create(Request $request)
    {
        return redirect('admin/customer/index');
    }

    public function show(\App\Models\Customer $customer)
    {
        $this->authorize('view', $customer);

        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
    }

    public function update(Request $request, Customer $customer)
    {
    }

    public function destroy(Customer $customer)
    {
    }
}
