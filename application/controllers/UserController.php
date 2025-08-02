<?php
class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UserModel');
        $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $this->load->view('user_form');
    }

    public function saveUser()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'paragraph' => $this->input->post('paragraph'),
            'image' => $this->input->post('image')
        );

        $this->UserModel->insertUser($data);

        echo "✅ Data Inserted Successfully!";
    }

    public function listUsers()
    {
        $data['homes'] = $this->UserModel->getAllUsers();
        $this->load->view('admin/pages/user_list', $data);

        // $homes = $this->UserModel->getAllUsers();
        // echo "<pre>";
        // print_r($homes);
        // exit;
    }
}
