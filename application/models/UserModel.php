<?php
class UserModel extends CI_Model
{

    // Insert a new user record into 'home' table
    public function insertUser($data)
    {
        return $this->db->insert('home', $data);
    }

    public function getAllUsers()
    {
        $query = $this->db->get('home'); // Fetch all rows from 'home' table
        return $query->result();         // Returns array of objects
    }
}
