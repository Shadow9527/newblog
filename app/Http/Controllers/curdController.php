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
        return DB::table('student')->where('id','>','')->update(['username'=>'欧志发']);
    }
    public function delete(){
        return DB::table('student')->where('id','=','5')->delete()      ;
    }

    public function testSelect(){
        $user = Student::query()->get();
        return dd($user);
    }

    public function testDel(){
        return Student::query()->delete();
    }

    public function testIns(){
        $student = new Student();
        $student->username = "张三";
        $student->sex = "男";
        $student->password = "sajhkfh";
        $student->save();
    }

}
