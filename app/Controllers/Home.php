<?php

use App\Models\User;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CIAuth;
use App\Validation\IsCurrentPasswordCorrect;
use App\Models\Designation;
use App\Models\Position;
use App\Models\EmployeeModel; 

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
