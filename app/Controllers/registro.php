<?php

namespace App\Controllers;

class registro extends BaseController
{
    public function __construct(){
       helper('url');
    }
    

    
    public function index()
    {
        return view('registro');
    }
}
