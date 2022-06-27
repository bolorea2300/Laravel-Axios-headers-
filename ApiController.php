<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function test(Request $request)
    {
        return response()->json($request->headers->get('GetData'));
    }
}
