<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('admin', static function($routes){

    $routes->group('', ['filter'=>'cifilter:auth'], static function($routes){
        //$routes->view('example-page','example-page');
        $routes->get('home', 'AdminController::index', ['as' => 'admin.home']);
        $routes->get('logout', 'AdminController::logoutHandler', ['as' => 'admin.logout']);
        ///////profile
        $routes->get('profile','AdminController::profile',['as'=>'admin.profile']);
        $routes->post('update-personal-details','AdminController::updatePersonalDetails',['as'=>'update-personal-details']);
        $routes->post('update-profile-picture','AdminController::updatePersonalPictures',['as'=>'update-profile-picture']);  
        $routes->post('change-password','AdminController::changePassword',['as'=>'change-password']);
        /////designation
        $routes->post('designation_save','AdminController::designationSave',['as'=>'designation_save']);
        $routes->get('designation','AdminController::designation',['as'=>'admin.designation']);
        $routes->get('organization','AdminController::organization',['as'=>'admin.organization']);
        //////employeeee
        $routes->get('employee','AdminController::employee',['as'=>'admin.employee']);
        $routes->get('employeelist','AdminController::employeelist',['as'=>'admin.employeelist']);
        $routes->get('employee_report','AdminController::employee_report',['as'=>'admin.employee_report']);
        //////attendance
        $routes->get('attendance','AdminController::attendance',['as'=>'admin.attendance']);
        ///////leave
        $routes->get('holidays','AdminController::holidays',['as'=>'admin.holidays']);
        $routes->get('leave_type','AdminController::leave_type',['as'=>'admin.leave_type']);
        $routes->get('earn_leave','AdminController::earn_leave',['as'=>'admin.earn_leave']);
        $routes->get('setting','AdminController::setting',['as'=>'setting']);
    });

    $routes->group('', ['filter'=>'cifilter:guest'], static function($routes){
       // $routes->view('example-auth','example-auth');
       $routes->get('login', 'AuthController::loginForm', ['as' => 'admin.login.form']);
       $routes->post('login', 'AuthController::loginHandler', ['as' => 'admin.login.handler']);
       $routes->get('forget-password','AuthController::forgotForms',['as'=>'admin.forget.forms']);
       $routes->post('send_password-reset-link', 'AuthController::sendPasswordResetLink', ['as' =>
       'send_password_reset_link']);
        $routes->get('password/reset/(:any)', 'AuthController::resetPassword/$1', ['as' => 'admin.reset-password']);
    });
});