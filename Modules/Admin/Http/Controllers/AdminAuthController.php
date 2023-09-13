<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\AdminLoginRequest;
use Session;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Http\Requests\StoreAdminRequest;
use Modules\Admin\Http\Requests\UpdateAdminRequest;
use Spatie\Permission\Models\Permission;

class AdminAuthController extends Controller
{

    public function loginForm()
    {
        return view('admin::auth.login');
    }

    public function login(AdminLoginRequest $request)
    {
        if (auth()->guard('admin')->attempt($request->validated())) {
            session()->put('branch_id', $request->get('branch_id'));
            return redirect()->route('admin/payment/over-view');
        }
    }



    public function logout()
    {
        auth()->logout();
        return redirect('/admin/login');
    }

    public function ChangeBranch(Request $request)
    {
        session()->forget('branch_id');
        session()->put('branch_id', $request->branch_id);
        return redirect()->back()->with('success', 'Done successfully');

    }

    public function index()
    {
        $admins=Admin::where('email','!=','admin@admin.com')->get();
        return view('admin::admin.index',compact('admins'));
    }

    public function create()
    {
        $permissions=Permission::get();
        return view('admin::admin.create',compact('permissions'));
    }

    public function store(StoreAdminRequest $request)
    {
        $admin=Admin::create($request->validated());
        $admin->syncPermissions($request->permission);
        return redirect()->route('admin.index')->with('success', 'Done successfully');
    }

    public function edit($id)
    {
        $admin=Admin::find($id);
        $permissions=Permission::get();
        return view('admin::admin.edit',compact('admin','permissions'));

    }

    public function update($id,UpdateAdminRequest $request)
    {
        $admin=Admin::find($id);
        $admin->update($request->validated());
        $admin->syncPermissions($request->permission);
        return redirect()->route('admin.index')->with('success', 'Done successfully');
    }

    public function destroy($id)
    {
        Admin::find($id)->delete();
        return redirect()->back()->with('success', 'Done successfully');

    }
}
