<?php

class Profile_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Profile_model');
    }

    public function index() {


    }

    public function read_users() {
        $query = $this->db->get("users");
        $data['records'] = $query->result();

        $this->load->helper('url');
        $this->load->view('home/profile',$data);

    }

    public function add_users() {

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

            $userID = $this->input->post('userID');
            $fName    = $this->input->post('fName');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password_confirm    = $this->input->post('password_confirm');
            $birthday = $this->input->post('birthday');
            $readingAge = $this->input->post('readingAge');
            $genres    = $this->input->post('genres');
            $bookBuddy = $this->input->post('bookBuddy');
            $badges = $this->input->post('badges');


            if ($this->Profile_model->insert($userID, $fName, $email, $password ,$birthday,$readingAge, $genres,$bookBuddy,$badges)) {

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

    public function update_users(){
        $this->load->model('Profile_Model');
        $data = array(
            'userID' => $this->input->post('userID'),
            'fName' => $this->input->post('fName'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'birthday' => $this->input->post('birthday'),
            'readingAge' => $this->input->post('readingAge'),
            'genres' => $this->input->post('genres'),
            'bookBuddy' => $this->input->post('bookBuddy'),
            'badges' => $this->input->post('badges'),
        );

        $old_userID = $this->input->post('userID');
        $res = $this->Profile_Model->update($data,$old_userID);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                "status" => $res
            )));
    }

    public function delete_users() {
        $this->load->model('Profile_Model');
        $userID = $this->uri->segment('3');
        $this->Profile_Model->delete($userID);

        $query = $this->db->get("users");
        $data['records'] = $query->result();
        $this->load->view('home/profile',$data);
    }
}

