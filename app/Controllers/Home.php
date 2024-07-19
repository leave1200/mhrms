<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
        { $data =[
            'pageTitle'=>'Login',
            'validation'=>'null'
        ];
        return view('backend/pages/auth/login', $data);
    }
}
