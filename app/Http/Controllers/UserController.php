<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
        // return "Code With Me";
        return view('user');
    }

    public function aboutUser(){
        return "Hello Lets Work on laravel";
    }
    public function getUserName($name){
        // return "Hello Lets Work on laravel ". $name;
        return view("getuser",['name'=>$name]);
    }

    public function adminlogin(){
        return view("admin.login");
    }
}
