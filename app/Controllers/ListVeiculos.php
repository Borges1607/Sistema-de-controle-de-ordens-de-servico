<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ListVeiculos extends BaseController
{
    public function index(): string
    {
        return view('listVeiculos');
    }
}
