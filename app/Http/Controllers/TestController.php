<?php

namespace App\Http\Controllers;

use fuzionmvc\Http\BaseController;

class TestController extends BaseController
{
    public function index(): string
    {
        return "Hello, World";
    }
}
