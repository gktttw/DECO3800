<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Auth');
	}

	public function index() {
		$this->login();
	}

	public function login() {
		$this->load->view('login');
	}

	public function registration() {
		$this->load->view('registration');
	}

	public function register() {
		if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$first_name= $this->security->xss_clean( $this->input->post('first_name') );
			$last_name= $this->security->xss_clean( $this->input->post('last_name') );
			$birthday= $this->security->xss_clean( $this->input->post('birthday') );
			$gender= $this->security->xss_clean( $this->input->post('gender') );
			$email= $this->security->xss_clean( $this->input->post('email') );
			$phone= $this->security->xss_clean( $this->input->post('phone') );
			$password = $this->security->xss_clean( $this->input->post('password') );

			// TODO: validation on pwd phone birthday......

		 	echo $this->Auth->register($first_name, $last_name, $birthday, $gender, $email, $phone, $password);
		}
	}

	public function loggingin() {
		if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$email= $this->security->xss_clean( $this->input->post('email') );
			$password = $this->security->xss_clean( $this->input->post('password') );

			echo $this->Auth->login($email, $password);
		}
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */