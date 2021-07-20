<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function test01(Request $request){
        $params=$request->input('p1');
        return $params;
    }
}
