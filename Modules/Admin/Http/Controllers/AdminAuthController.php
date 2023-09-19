<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\AdminLoginRequest;
use Session;
use Illuminate\Http\Request;


class AdminAuthController extends Controller
{

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



    public function logout()
    {
        auth()->logout();
        return redirect('/admin/login');
    }




}
