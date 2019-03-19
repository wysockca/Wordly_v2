<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_Model extends CI_Model {

    public function __construct() {

        parent::__construct();
        $this->load->database();
    }

    public function login($email, $password) {
        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('email', $email);
        $hash = $this->db->get()->row('password');

        return password_verify($password, $hash);
    }

    public function get_userID($email) {

        $this->db->select('userID');
        $this->db->from('users');
        $this->db->where('email', $email);

        return $this->db->get()->row('userID');

    }

    public function get_user($userID) {
        $this->db->from('users');
        $this->db->where('userID', $userID);
        return $this->db->get()->row();
    }


    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }



    private function verify_password_hash($password, $hash) {

        return password_verify($password, $hash);

    }
}
