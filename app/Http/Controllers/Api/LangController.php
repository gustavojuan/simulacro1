<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function index()
    {

        return response()->json(['data' => 'llego'], 200);
    }

}
