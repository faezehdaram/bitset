<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projController extends Controller
{
    public function ProjAction(Request $request)
    {
        $request->file('file')->store('upload');
       return $request;

    }
    
}
