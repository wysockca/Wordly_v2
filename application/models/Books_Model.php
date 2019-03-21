<?php
class Books_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }


    public function insert($bookId, $title, $author,  $image ,$description,$pages, $genre,$isbn) {

        $data = array(
            'bookId'   => $bookId,
            'title'    => $title,
            'author'    => $author,
            'image' =>  $image,
            'description' => $description,
            'pages'     => $pages,
            'genre'  => $genre,
            'ISBN'      => $isbn,
        );

        return $this->db->insert('books', $data);

    }

    public function delete($booksId) {
        if ($this->db->delete("books", "booksId = ".$booksId)) {
            return true;
        }
    }

    public function update($data,$old_booksId) {
        $this->db->set($data);
        $this->db->where("booksId", $old_booksId);
        $this->db->update("books", $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
?>