<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ListMecanicos extends BaseController
{
    public function index(): string
    {
        return view('listMecanicos');
    }
}
