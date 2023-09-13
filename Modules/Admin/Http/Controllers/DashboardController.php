<?php

namespace Modules\Admin\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public $clientAction;

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('admin::dashboard.index');
    }
}
