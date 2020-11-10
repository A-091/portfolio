<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TopController extends Controller
{
    /**
     *@throws BindingResolutionException
     * @return Application|Factory|View
     */
    public function app()
    {
        return view('admin.create.top');
    }

    /**
     * @param Request $requeest
     *
     *@throws BindingResolutionException
     * @return Application|Redirector|RedirectResponse
     */
    public function create(Request $requeest)
    {
        return redirect('admin/create/top');
    }
}
