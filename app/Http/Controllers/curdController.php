<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class curdController extends Controller
{
    public function insert(Request $request){
       return DB::table('student')->insert(['username'=>"ouzhifa",'sex'=>"男","password"=>"ajgfa"]);
    }
    public function select(){
        $user= DB::table('student')->get();
        //return var_dump($user);
        return dd($user);
    }
    public function update(){
        return DB::table('student')->where(['id'=>1])->update(['username'=>'欧志发']);
    }
    public function delete(){
        return DB::table('student')->where('id','<','3')->delete()      ;
    }

    public function testSelect(){
        $user = Student::query()->get();
        return dd($user);
    }
}
