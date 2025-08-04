<?php
class UserModel extends CI_Model
{

    public function insertDemoData($data)
    {
        return $this->db->insert('demo_data', $data);
    }

    public function insertUser($data)
    {
        return $this->db->insert('home', $data);
    }

    public function getAllUsers()
    {
        $query = $this->db->get('home'); 
        return $query->result();        
    }

    public function getDemoData()
    {
        $query = $this->db->get('demo_data'); 
        return $query->result();        
    }
}
