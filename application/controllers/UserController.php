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
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        $image = '';

        if ($this->upload->do_upload('image')) {
            $uploadData = $this->upload->data();
            $image = $uploadData['file_name'];
        }

        $data = array(
            'title' => $this->input->post('title'),
            'paragraph' => $this->input->post('paragraph'),
            'image' => $image
        );

        $this->UserModel->insertUser($data);

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
