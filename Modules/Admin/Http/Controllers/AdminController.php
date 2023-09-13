<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\AdminLoginRequest;

use Session;

class AdminController extends Controller
{

    public function __construct(

    ){

    }
    public function index()
    {
        return view('admin::layouts.app');
    }

    public function loginForm()
    {

        return view('admin::auth.login');
    }

    public function login(AdminLoginRequest $request)
    {

        if (auth()->guard('admin')->attempt($request->validated())) {

            return redirect()->route('admin-panel');
        }

    }


}
