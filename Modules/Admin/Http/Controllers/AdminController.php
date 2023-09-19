<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Http\Requests\StoreAdminRequest;
use Modules\Admin\Http\Requests\UpdateAdminRequest;
use Spatie\Permission\Models\Permission;



class AdminController extends Controller
{

    public function __construct(

    ){

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
