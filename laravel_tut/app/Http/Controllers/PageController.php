<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller{
    public function showHome(){
        return view('welcome');
    }

    public function showUser(string $id){
        return view('User', ['id' => $id]);
    }

    public function showBlog(){
        return view('blog');
    }

}
