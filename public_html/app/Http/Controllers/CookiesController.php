<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CookiesController extends Controller
{
    function setCookie()
    {
        return view('index');
    }

    public function getCookie()
    {
        return request()->cookie('cookie_consent');
    }

    public function delCookie()
    {
        return response('deleted')->cookie('cookie_consent', null, -1);
    }

    public function acceptCookies()
    {
        return response()->json(['status' => 'accepted'])->cookie('cookie_consent', 'accepted', 60 * 24 * 30); // 30 días
    }

    public function rejectCookies()
    {
        return response()->json(['status' => 'rejected'])->cookie('cookie_consent', 'rejected', 60 * 24 * 30); // 30 días
    }
}
