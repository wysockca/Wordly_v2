<?php

class Books_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('books_model');
    }

    public function index() {


    }

    public function read_books() {
        $query = $this->db->get("books");
        $data['records'] = $query->result();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                "status" => true
            )));

    }

    public function add_books() {

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
            $bookId = $this->input->post('bookId');
            $title    = $this->input->post('title');
            $author = $this->input->post('author');
            $image = $this->input->post('image');
            $description = $this->input->post('description');
            $pages    = $this->input->post('pages');
            $genre    = $this->input->post('genre');
            $isbn = $this->input->post('isbn');

            if ($this->Books_model->insert($bookId, $title, $author,  $image ,$description,$pages, $genre,$isbn)) {

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

    public function update_books(){
        $this->load->model('Books_Model');
        $data = array(
            $bookId = $this->input->post('bookId'),
            $title    = $this->input->post('title'),
            $author = $this->input->post('author'),
            $image = $this->input->post('image'),
            $description = $this->input->post('description'),
            $pages    = $this->input->post('pages'),
            $genre    = $this->input->post('genre'),
            $isbn = $this->input->post('isbn')
        );

        $old_bookId = $this->input->post('bookID');
        $res = $this->Book_Model->update($data,$old_bookId);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                "status" => $res
            )));
    }

    public function delete_books() {
        $this->load->model('Books_Model');
        $bookId = $this->uri->segment('3');
        $this->Books_Model->delete($bookId);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                "status" => true
            )));

    }
}
