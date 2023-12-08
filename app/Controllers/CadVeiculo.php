<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CadVeiculo extends BaseController
{
    public function index(): string
    {
        return view('cadVeiculo');
    }
}
