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
        $routes->post('designation_save','AdminController::designationSave', ['as' => 'designation_save']);
        $routes->get('designation','AdminController::designation',['as'=>'admin.designation']);
        $routes->post('delete_designation', 'AdminController::deleteDesignation', ['as' => 'delete_designation']);
        $routes->post('update_designation', 'AdminController::updateDesignation', ['as' => 'update_designation']);
        ///////////position
        $routes->get('position','AdminController::position',['as'=>'admin.position']);
        $routes->post('position_save', 'AdminController::positionSave', ['as' => 'position_save']);
        $routes->post('update_position', 'AdminController::updatePosition', ['as' => 'update_position']);
        $routes->post('delete_position', 'AdminController::deletePosition', ['as' => 'delete_position']);
        //////employeeee
        $routes->get('employee','AdminController::employee',['as'=>'admin.employee']);
        $routes->post('employee_save', 'AdminController::saveEmployee',['as' => 'employee_save']);
        $routes->get('employeelist','AdminController::employeelist',['as'=>'admin.employeelist']);
        $routes->post('update_employee', 'AdminController::updateEmployee', ['as' => 'update_employee']);
        $routes->get('employee_report','AdminController::employee_report',['as'=>'admin.employee_report']);
        $routes->post('employee_view', 'AdminController::getEmployee',['as' => 'employee_view']);
        $routes->post('delete_employee', 'AdminController::deleteEmployee', ['as' => 'delete_employee']);
        //////attendance
        $routes->get('attendance','AdminController::attendance',['as'=>'admin.attendance']);
        ///////leave
        $routes->get('holidays','AdminController::holidays',['as'=>'admin.holidays']);
        $routes->get('leave_type','AdminController::leave_type',['as'=>'admin.leave_type']);
        $routes->get('earn_leave','AdminController::earn_leave',['as'=>'admin.earn_leave']);
        $routes->get('setting','AdminController::setting',['as'=>'setting']);
        //////
        $routes->get('employee/print/(:num)', 'AdminController::printEmployee/$1', ['as' => 'employee_print']);
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