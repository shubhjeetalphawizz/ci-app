<?php
class UserModel extends CI_Model {

    // Inserts data into 'users' table
    public function insertUser($data) {
        return $this->db->insert('home', $data);
    }

    public function getAllUsers() {
    $query = $this->db->get('home');
    return $query->result(); 
    
}
}
