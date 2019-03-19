<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('Auth_model');

    }

    public function login() {

        $this->load->helper('form');
        $this->load->library('form_validation');


        if (false) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    "status" => false
                )));
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->Auth_model->login($email, $password)) {

                $userID = $this->Auth_model->get_userID($email);
                $user    = $this->Auth_model->get_user($userID);

                $_SESSION['userID']      = $user->userID;
                $_SESSION['fName']     = $user->fName;
                $_SESSION['logged_in']    = true;

                 return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode(array(
                        "status" => true
                    )));
            } else {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode(array(
                        "status" => false
                    )));
            }
        }
    }


    public function logout() {

        // create the data object
        $data = new userClass();

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    "status" => false
                )));

        } else {


            redirect('/');

        }

    }

}
