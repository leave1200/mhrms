<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CIAuth;
use App\Validation\IsCurrentPasswordCorrect;
use App\Models\Designation;

class AdminController extends BaseController
{
    protected $helpers =['url','form', 'CIMail', 'CIFunctions'];

    public function index()
    {
        $data = [
            'pageTitle'=>'Dashboard',
        ];
        return view('backend\pages\home', $data);
    }

    public function logoutHandler(){
        CIAuth::forget();
        return redirect()->route('admin.login.form')->with('fail', 'You are logged out!');
    }
    public function profile(){
        $data = array(
            'pageTitle'=>'Profile',
        );
        return view('backend/pages/profile', $data);
    }
    public function updatePersonalDetails() {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $user_id = CIAuth::id();
    
        // Validate the form input
        $validation->setRules([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fullname is required'
                ]
            ],
            'username' => [
                'rules' => 'required|min_length[4]|is_unique[users.username,id,' . $user_id . ']',
                'errors' => [
                    'required' => 'Username is required',
                    'min_length' => 'Username must have a minimum of 4 characters',
                    'is_unique' => 'Username already taken!'
                ]
            ]
        ]);
    
        if (!$validation->withRequest($request)->run()) {
            // Validation failed, redirect back with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $userModel = new \App\Models\User();
            
            // Update user details
            $update = $userModel->update($user_id, [
                'name' => $request->getPost('name'),
                'username' => $request->getPost('username'),
                'bio' => $request->getPost('bio')
            ]);
    
            if ($update) {
                $user_info = $userModel->find($user_id);
                return redirect()->back()->with('success', "Your personal details have been updated successfully.");
            } else {
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        }
    }

     public function updatePersonalPictures(){
        $request = \Config\Services::request();
        $user_id = CIAuth::id();
        $user = new User();
        $user_info = $user->asObject()->where('id',$user_id)->first();

        $path ='images/users/';
        $file = $request->getFile('user_profile_file');
        $old_picture = $user_info->picture;
        $new_filename = 'UIMG_'.$user_id.$file->getRandomName();

        if( $file->move($path,$new_filename) ){
            if( $old_picture != null && file_exists($path.$old_picture) ){
                unlink($path.$old_picture);
            }
            $user->where('id',$user_info->id)
                 ->set(['picture'=>$new_filename])
                 ->update();

                 echo json_encode(['status'=>1,'msg'=>'Done!, Your profile picture has been successfully updated.']);
        }else{
            echo json_encode(['status'=>0,'msg'=>'Something went wrong.']);
        }
        // $upload_image = \Config\Services::image()
        //                 ->withFile($file)
        //                 ->resize(450,450,true,'height')
        //                 ->save($path.$new_filename);
        
        // if( $upload_image ){
        //     if( $old_picture != null && file_exists($path.$new_filename) ){
        //         unlink($path.$old_picture);
        //     }
        //     $user->where('id',$user_info->id)
        //                     ->set(['picture'->$new_filename])
        //                     ->update();

        //     echo json_encode(['status'=>1,'msg'=>'Something wentt wrong.']);
        // }else{
        //     echo json_encode(['status'=>0,'msg'=>'Something went wrong.']);
        // }
    } 
    public function changePassword(){
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $user_id = CIAuth::id();
        $user = new User();
        $user_info = $user->asObject()->where('id', $user_id)->first();
    
        // Validate the form
        $validation->setRules([
            'current_password' => [
                'rules' => 'required|min_length[5]|check_current_password[current_password]',
                'errors' => [
                    'required' => 'Enter the current password',
                    'min_length' => 'Password must have at least 5 characters',
                    'check_current_password' => 'The current password is incorrect'
                ]
            ],
            'new_password' => [
                'rules' => 'required|min_length[5]|max_length[20]|is_password_strong[new_password]',
                'errors' => [
                    'required' => 'New password is required',
                    'min_length' => 'New password must have at least 5 characters',
                    'max_length' => 'New password must not exceed 20 characters',
                    'is_password_strong' => 'Password must contain at least 1 uppercase, 1 lowercase, 1 number, and 1 special character'
                ]
            ],
            'confirm_new_password' => [
                'rules' => 'required|matches[new_password]',
                'errors' => [
                    'required' => 'Confirm new password',
                    'matches' => 'Password mismatch.'
                ]
            ]
        ]);
    
        if (!$validation->withRequest($request)->run()) {
            // Validation failed
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        } else {
            // Validation passed, update the password
            $new_password = $request->getPost('new_password');
            $user->update($user_id, ['password' => password_hash($new_password, PASSWORD_DEFAULT)]);
    
            return redirect()->back()->with('success', 'Password has been changed successfully.');
        }
    }
    
    
    
    
    

    

    /////!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


    public function designation(){
        $designationModel = new Designation();
        $designations = $designationModel->findAll(); // Retrieve all designations from the database

        $data = [
            'pageTitle' => 'Designation',
            'designations' => $designations // Pass the fetched designations to the view
        ];

        return view('backend/pages/designation', $data);
    }
        public function designationSave()
        {
            $designationModel = new Designation();
            
            $data = [
                'name' => $this->request->getPost('designation')
            ];

            if ($designationModel->insert($data)) {
                // If insertion is successful, return a success response
                return $this->response->setJSON(['status' => 'success', 'message' => 'Designation added successfully']);
            } else {
                // If there's an error, return an error response
                return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to add Designation']);
            }
        }

    
    public function organization()
    {
        $data = [
            'pageTitle' => 'Organization'
        ];
        return view('backend/pages/organization', $data);
    }
    


    /////#######################################################################################################


    public function employee(){
        $data = array(
        'pageTitle'=>'Employee'
        );
        return view('backend/pages/employee', $data);
    }
    public function employeelist(){
        $data = array(
            'pageTitle'=>'Employee List'
        );
        return view('backend/pages/employeelist');
    }
    public function employee_report(){
        $data = array(
            'pageTitle'=>'Employee Report'
        );
        return view('backend/pages/employee_report');
    }


    /////&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&



    public function attendance(){
        $data = array(
        'pageTitle'=>'Attendance'
        );
        return view('backend/pages/attendance', $data);
    }
    public function report(){
        $data = array(
        'pageTitle'=>'Report'
        );
        return view('backend/pages/report', $data);
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////



    public function leave_type(){
        $data = array(
        'pageTitle'=>'Leave Type'
        );
        return view('backend/pages/leave_type', $data);
    }
    public function holidays(){
        $data = array(
        'pageTitle'=>'Holidays'
        );
        return view('backend/pages/holidays', $data);
    }
    public function earn_leave(){
        $data = array(
        'pageTitle'=>'Earn Leave'
        );
        return view('backend/pages/earn_leave', $data);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setting(){
        $data = array(
        'pageTitle'=>'Setting'
        );
        return view('backend/pages/setting', $data);
    }

}
