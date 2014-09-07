<?php

class Admin extends CI_Controller {

    /**
     * Set to true when user enters a wrong username and password
     * @var bool
     */
    private $err;

    /**
     * The variables to be sent to the template view
     * @var array 
     */
    private $elements = array(
        'main_content' => '',
        'title' => '',
        /**
         *  A list of variables sent to the final view
         */
        'data' => array(),
        'user' => 'admin',
    );

    /**
     * login page
     */
    function index() {
        $this->elements['main_content'] = 'admin/admin_login_view';
        $this->elements['title'] = 'Admin';

        if (isset($this->err)) {
            if ($this->err) {
                $message = 'Wrong username & password combination!';
                $this->elements['data']['errmessage'] = $message;
            }
        }
        $this->load->view('includes/template', $this->elements);
    }

    /**
     * called to validate the credentials of the user
     */
    function validate_credentials() {
        $this->load->model('admin_model');
        $admin = new User_Model;
        $admin->load_by_field($this->input->post('username'), 'username');
        FB::log($admin);

        if ($admin->user_id != '' &&
                $admin->hashed_password == md5($this->input->post('password'))) {
            //redirect to member homepage
            redirect('/admin/dashboard');
        } else {
            $this->err = TRUE;
            $this->index();
        }
    }

    /**
     * admin dashboard with all the options
     */
    function dashboard() {
        switch ($this->uri->segment(3)) {
            //member management module
            case 'member_management':
                $this->load->model('member_model');
                $member = new Member_Model;
                $members = $member->get();

                switch ($this->uri->segment(4)) {
                    case 'edit_member':
                        $member->load($this->uri->segment(5));

                        $this->elements['main_content'] = 'admin/edit_member_view';
                        $this->elements['title'] = 'Edit Member';
                        $this->elements['data'] = array(
                            'member' => $member,
                        );

                        $this->load->view('includes/template', $this->elements);
                        break;

                    default :
                        $this->elements['main_content'] = 'admin/member_management_view';
                        $this->elements['title'] = 'Admin Member Management';
                        $this->elements['data'] = array(
                            'members' => $members,
                        );

                        $this->load->view('includes/template', $this->elements);
                        break;
                }
                break;

            //default dashboard
            default:
                $this->elements['main_content'] = 'admin/admin_dashboard_view';
                $this->elements['title'] = 'Admin Dashboard';
                $this->elements['main_content'] = 'admin/admin_dashboard_view';

                array(
                    'main_content' => 'admin/admin_dashboard_view',
                    'title' => 'Admin Dashboard',
                    'user' => 'admin',
                );
                $this->load->view('includes/template', $this->elements);
                break;
        }
    }

}
