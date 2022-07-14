<?php 
    class Users extends Controller{
        public function __construct(){

        }

        public function register(){
            // If user submit a form through a post method
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
            } else {
                //Init data
                $data = [
                    'name'=>'',
                    'email'=>'',
                    'password'=>'',
                    'confirm_password'=>'',
                    'name_error'=>'',
                    'email_error'=>'',
                    'password_error'=>'',
                    'confirm_password'=>''
                ];

                //Load the view
                $this->view('users/register',$data);
            }
        }
    }