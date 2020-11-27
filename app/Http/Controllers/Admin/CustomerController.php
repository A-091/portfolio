<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate();
        return view('admin.customer.index', ['customers' => $customers]);
        
    }
    
    public function create(Request $request)
    {
        return view('admin.customer.create');
    }
    
    public function store(Request $request)
    {
        $attribute = request()->validate([
        'name' => ['required', 'min:3', 'max:32'],
            'postal' => ['required',],
            'address' => ['required',],
            'email' => ['required', 'E-Mail'],
            'phone' => ['required',],
        ]);
        $customer = Customer::create($attribute);
        return redirect('customer');
    }
    
    public function show($id)
    {
       
        return view('admin.customer.show', ['customer' => Customer::findOrFail($id)]);
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
