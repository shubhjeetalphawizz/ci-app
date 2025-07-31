<?php
class UserModel extends CI_Model {

    // Inserts data into 'users' table
    public function insertUser($data) {
        return $this->db->insert('home', $data);
    }
}
