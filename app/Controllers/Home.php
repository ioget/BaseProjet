<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('url');
        helper('html');
        return view('templates/header')
        . view('pages/' . "home")
        . view('templates/footer');
    }
}
