<?php 
class Home extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	public function index() {
		$this->load->view('home_view');
	}
	public function signup_view() {
		$this->load->view('register_user_view');
	}
	public function loggedin() {
		$this->load->view('loggedin_view');
	}
	public function signup() {
		$this->form_validation->set_rules('fname','First Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('lname','Last Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('uname','Username','trim|required|min_length[6]');
		$this->form_validation->set_rules('password','Pasword','trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]' );

		if ($this->form_validation->run() ===FALSE) {
			$this->load->view('register_user_view');
		}else{
			$data = array(
				'firstname' => $this->input->post('fname'),
				'lastname' => $this->input->post('lname'),
				'username' => $this->input->post('uname'),
				'password' => $this->input->post('password')
			);
			$this->session->set_flashdata('regsuccess', 'You are now registered! You can login now' );
			$this->users_model->dbinsert($data);
			$this->load->view('signup_view');
		}
	}
	public function signin() {
		$this->form_validation->set_rules('uname','User Name ','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		
		if ($this->form_validation->run()===FALSE) {
			$this->load->view('home_view');
		}else {
			$username = $this->input->post('uname');
			$password = $this->input->post('password');
			$data =	$this->users_model->dbsignin($username, $password);
			if ($data != NULL) {
				$sess_data = array(
					'user_id' => $data->id,
					'firstname' => $data->firstname,
					'lastname' => $data->lastname,
					'username' => $data->username
				);
				$this->session->set_userdata('loggedin', $sess_data);
				$this->session->set_flashdata('login','successfully logged in');
				$this->load->view('loggedin');
			}else {
				$this->session->set_flashdata('login','invalid login');
				$this->load->view('home_view');
			}
		}
	}
	public function signout() {
		session_unset('loggedin');
		redirect('home/');
	}
	public function details_users()	{

	}
}