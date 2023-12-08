<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ListServicos extends BaseController
{
    public function index(): string
    {
        return view('listServicos');
    }
}
