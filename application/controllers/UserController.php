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
		$data = array(
			'title' => $this->input->post('title'),
			'paragraph' => $this->input->post('paragraph'),
			'image' => $this->input->post('image')
		);

		$this->UserModel->insertUser($data);

		echo "✅ Data Inserted Successfully!";
	}

	public function demoData()
	{
		// $data = array(
		//     'title' => $this->input->post('title'),
		//     'description' => $this->input->post('description'),
		//     'image' => $this->input->post('image')
		// );

		// $this->UserModel->insertDemoData($data);


		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			die;
		} else {
			$data = array('upload_data' => $this->upload->data());
			print_r($data);
			die;
		}


		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$image = $this->input->post('image');
		$data = array(
			'title' => $title,
			'description' => $description,
			'image' => $image,

		);

		$this->db->insert('demo_data', $data);
		redirect('admin/dashboard');
	}


	public function showData()
	{
		$data['demos'] = $this->UserModel->getDemoData();
		$this->load->view('admin/pages/user_list', $data);

		// $homes = $this->UserModel->getAllUsers();
		// echo "<pre>";
		// print_r($homes);
		// exit;
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
