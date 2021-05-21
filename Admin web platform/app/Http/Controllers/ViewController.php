<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller{
    
    /*
        Отрисовка главной страницы сайта
    */
    public function index(){
        return view('connect');
    }

}

