<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library(array('session'));
    }

    public function index()
    {

    }

    public function reading() {
        $qry = "SELECT *FROM bookid_userid INNER JOIN users ON bookid_userid.userID = users.userID  INNER JOIN books ON books.bookId = bookid_userid.bookId WHERE reading = '1'";
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function want_to_read() {
        $qry = "SELECT *FROM bookid_userid INNER JOIN users ON bookid_userid.userID = users.userID  INNER JOIN books ON books.bookId = bookid_userid.bookId WHERE want_to_read = '1'" ;
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function completed() {
        $qry = "SELECT *FROM bookid_userid INNER JOIN users ON bookid_userid.userID = users.userID  INNER JOIN books ON books.bookId = bookid_userid.bookId WHERE completed = '1'" ;
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function reading_delete() {
        $qry = "UPDATE bookid_userid SET reading = '0' WHERE bookID ='{bookID}''";
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function want_to_read_delete() {
        $qry = "UPDATE bookid_userid SET want_to_read = '0'WHERE bookID ='{bookID}''";
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function completed_delete() {
        $qry = "UPDATE bookid_userid SET completed = '0'WHERE bookID ='{bookID}''";
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function reading_add() {
        $qry = "UPDATE bookid_userid SET reading = '1' WHERE bookID ='{bookID}''";
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function want_to_read_add() {
        $qry = "UPDATE bookid_userid SET want_to_read = '1'WHERE bookID ='{bookID}''";
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function completed_add() {
        $qry = "UPDATE bookid_userid SET completed = '1'WHERE bookID ='{bookID}''";
        $result = $this->db->query($qry)->result_array();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

}
