<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
// use Modules\CommonModule\Helper\UploaderHelper;
use Modules\CommonModule\Helper\arabicdate;
use Modules\CommonModule\Helper\LanguageHelper;
use Modules\CommonModule\Entities\Apps;

class LanguageController extends Controller
{

    public function change($lang)
    {
        Session::put('applocale', $lang);
        return redirect()->back();
    }
}
