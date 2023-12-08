<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CadMecanico extends BaseController
{
    public function index(): string
    {
        return view('cadMecanico');
    }
}
