<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerSearchPost;
use App\MyServices\MyApplicationService;
use Illuminate\Http\Request;

class CustomerSearchController extends Controller
{
    //protected $myApplicationService;

    //public function __construct()
    //{
    //    $this->myApplicationService = app()->make('myapplicationservice');
    //}

    /**
     * 顧客を検索して表示する
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('customer_search');
    }

    public function search(CustomerSearchPost $request, MyApplicationService $myApplicationService)
    {
        $validated = $request->validated();
        $wheres = [];
        $search_criterias = [];

        // 氏名の指定は有るか
        if (!empty($validated['name'])) {
            array_push($wheres, ['name', '=', $validated['name']]);
            array_push($search_criterias, '氏名が' . $validated['name'] . 'に一致する');
        }
        $customers = Customer::where($wheres)->paginate();
        return view('customer_search', compact('customers', 'search_criterias', 'validated'));

    }

}
