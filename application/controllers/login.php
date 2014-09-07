<?php

class Login extends CI_Controller {

    function index() {
        $elements = array(
            'main_content' => 'login_view',
            'title' => 'Login',
            'data' => array()
            );
        $this->load->view('includes/template', $elements);
    }

    function validate_credentials() {
        $this->load->model('member_model');
        $member = new Member_Model;
        $member->load_by_field($this->input->post('email'), 'email');
        FB::log($member);

        if ($member->email != '' &&
                $member->hashed_password == md5($this->input->post('password'))) {
            echo 'You have logged in as: ' . $member->first_name;
            //redirect to member homepage
            
            redirect('/homepage/');
            /*
            
             * 
             */
        } else {
            echo 'Wrong username password combination';
        }
    }

    function display_member() {
        
    }

}
