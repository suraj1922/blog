<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testMe(){
        return view('testMe');
    }

    public function adminHome(){
        return view('admin.home');
    }
    public function userAbout($name){
        return view('user',['user'=>$name]);
    }
}
