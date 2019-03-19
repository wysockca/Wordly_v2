<?php
class Profile_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }


    public function insert($userID, $fName, $email, $password ,$birthday,$readingAge, $genres, $bookBuddy, $badges) {

        $data = array(
            'userID'   => $userID,
            'fName'      => $fName,
            'email'      => $email,
            'birthday'   => $birthday,
            'readingAge' => $readingAge,
            'genres'     => $genres,
            'bookBuddy'  => $bookBuddy,
            'badges'      => $badges,
            'password'   => password_hash($password, PASSWORD_BCRYPT)
        );

        return $this->db->insert('users', $data);

    }

    public function delete($userID) {
        if ($this->db->delete("users", "userID = ".$userID)) {
            return true;
        }
    }

    public function update($data,$old_userID) {
        $this->db->set($data);
        $this->db->where("userID", $old_userID);
        $this->db->update("users", $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
?>