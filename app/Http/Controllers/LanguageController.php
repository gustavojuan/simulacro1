<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
            $request->session()->put('language_code', $request->language);

            return back();
    }

}
