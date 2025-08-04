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

	// public function saveUser()
	// {
	// 	$config['upload_path']   = './uploads/';
	// 	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 	$config['max_size']      = 2048;

	// 	$this->load->library('upload', $config);

	// 	$image = '';

	// 	if ($this->upload->do_upload('image')) {
	// 		$uploadData = $this->upload->data();
	// 		$image = $uploadData['file_name']; 
	// 	}

	// 	$data = array(
	// 		'title'     => $this->input->post('title'),
	// 		'paragraph' => $this->input->post('paragraph'),
	// 		'image'     => $image
	// 	);

	// 	$this->UserModel->insertUser($data);

	// 	echo "✅ Data Inserted Successfully!";
	//	// http://localhost/ci-app/index.php/UserController/listUsers
	// }

	public function saveUser()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10000; // 100 KB
		$config['max_width'] = 4000;
		$config['max_height'] = 4000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			die;
		} else {
			// Get uploaded file name
			$upload_data = $this->upload->data();
			$image = $upload_data['file_name'];

			// Now get other POST fields
			$title = $this->input->post('title');
			$paragraph = $this->input->post('paragraph');

			// Prepare data array
			$data = array(
				'title' => $title,
				'paragraph' => $paragraph,
				'image' => $image, // store filename only
			);

			// Insert into database
			$this->db->insert('home', $data);

			// Redirect
			redirect('admin/dashboard');
		}
	}


	public function demoData()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10000; // 100 KB
		$config['max_width'] = 4000;
		$config['max_height'] = 4000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			die;
		} else {
			// Get uploaded file name
			$upload_data = $this->upload->data();
			$image = $upload_data['file_name'];

			// Now get other POST fields
			$title = $this->input->post('title');
			$description = $this->input->post('description');

			// Prepare data array
			$data = array(
				'title' => $title,
				'description' => $description,
				'image' => $image, // store filename only
			);

			// Insert into database
			$this->db->insert('demo_data', $data);

			// Redirect
			redirect('admin/dashboard');
		}
	}


	public function showData()
	{
		$data['demos'] = $this->UserModel->getDemoData();
		$this->load->view('admin/pages/user_list', $data);
	}
	public function listUsers()
	{
		$data['homes'] = $this->UserModel->getAllUsers();
		$this->load->view('admin/pages/user_list', $data);
	}
}
