<?php
class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->database();
        $this->load->model('UserModel');                 // Load the model
        $this->load->helper(array('form', 'url'));       // Load form & URL helpers
    }

    // Show the form
    public function index() {
        $this->load->view('user_form');                 // Load the view file (form)
    }

    // Handle form submission
    public function saveUser() {
        // Get POST data
        $data = array(
            'title'  => $this->input->post('title'),       // Get 'name' input
            'paragraph' => $this->input->post('paragraph')       // Get 'email' input
        );

        // Save to DB using model
        $this->UserModel->insertUser($data);

        echo "✅ Data Inserted Successfully!";
    }
}
