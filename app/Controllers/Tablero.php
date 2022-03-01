<?php

namespace App\Controllers;

class Tablero extends BaseController
{
    public function index()
    {
        return view('tablero/index');
    }
}