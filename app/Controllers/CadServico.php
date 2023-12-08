<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CadServico extends BaseController
{
    public function index(): string
    {
        return view('cadServico');
    }
}
