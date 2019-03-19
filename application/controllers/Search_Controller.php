<?php

class Search_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Search_Modal');
    }

    function search_title()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->Search_Modal->search_title($keyword);
        $this->load->view('result_view',$data);
    }
    function search_author()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->Search_Modal->search_auth($keyword);
        $this->load->view('result_view',$data);
    }

}
