<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller extends CI_Controller {
	// Calling admin Functions - localhost/blog/admin/dbmsBlog/<function Name>
	// localhost/blog/ not available
	// localhost/blog/admin/dbmsblog not available
	// Clean URLs not implemented
	
	public function login()                  //login and comment uses Homepage Navbar
	{
		$this->load->view('users/login_page');
	}

	public function register()                  //login and comment uses Homepage Navbar
	{
		$this->load->view('users/register_page');
	}

	public function register_user(){
		$this->load->database();
		$this->load->model('user_model');
		$this->form_validation->set_rules('username','User Name','required');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]',
			array(
				'is_unique' => 'Email is taken already'
			)
		);

		$username  =   $this->input->post('username');
		$password  = $this->input->post('password');
		$email  =  $this->input->post('email');

		$isValidated  =  $this->form_validation->run();
		if($isValidated){
			//Ready for saving to database
			$this->load->database();
			$this->load->model('user_model');

			$data   =  array(
				'username' => $username,
				'password' => password_hash($password,PASSWORD_DEFAULT),
				'email' => $email
			);
			

			$result   = $this->user_model->save_user($data);
			header('location:'.base_url('controller/register'));
			
		}
		else {
			//Form has errors
			$this->form_validation->set_error_delimiters(null, null);
			$errors  =  array(
				'username' =>form_error('username'),
				'password' => form_error('password'),
				'email' => form_error('email')
			);

			header('location:'.base_url('controller/register'));
		}
	
	}


	public function login_user(){
		$this->load->database();
		$this->load->model('user_model');

		$password  = $this->input->post('password');
		$email  =  $this->input->post('email');

		/**if($email == "admin" && $password == "1234") {
			$newdata = array(
					'admin' => TRUE,
			        'email'     => $email,
			        'logged_in' => TRUE
				);

				$this->session->set_userdata($newdata);
				header('location:'.base_url(). "controller/user_list");
		} else {***/
		$userExists  =  $this->user_model->check_email($email);
		if(!$userExists){

			$this->output->set_status_header(404);
			$this->output
        			->set_content_type('application/json')
					->set_output(json_encode(array('message' =>  'Email does not exist!' )));

		} else {
			$correctLogin = $this->user_model->check_valid($email,$password);
			
			if ($correctLogin) {
				$newdata = array(
			        'admin' => TRUE,
			        'email'     => $email,
			        'logged_in' => TRUE
				);

				$this->session->set_userdata($newdata);
				header('location:'.base_url(). "controller/user_list");
			} else {
				header('location:'.base_url(). "controller/login");
			}
		}		

	}

	public function publish_blog() {

		$words  =   $this->input->post('words');
		$image  =  $this->input->post('image');

		$this->load->database();
		$this->load->model('user_model');
		$data   =  array(
				'words' => $words,
				'image' => $image,
			);
		$result   = $this->user_model->save($data);
		header('Location:  '  . base_url('controller/publish'));
	}
	
	public function comment()
	{
		$this->load->database();
		$this->load->model('user_model');
		$id =  $this->input->get('id');
		$data  = array('users' => $this->user_model->view_all_users());

		// ---> insert homepage headers/nav/footer
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/blogpost_comment', $data);
		$this->load->view('templates/footer');
	}

	public function publish()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_publish');
		$this->load->view('templates/admin/footer');
	}


	public function user_list()
	{

		$this->load->database();
		$this->load->model('user_model');
		$data  = array('users' => $this->user_model->view_all_users());
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_page',$data);
		$this->load->view('templates/admin/footer');
	}

	public function view()
	{
		$this->load->database();
		$this->load->model('user_model');
		$data  = array('blogs' => $this->user_model->view_all());

		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_view',$data);
		$this->load->view('templates/admin/footer');
	}

		public function reply()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_message.php');
		$this->load->view('templates/admin/footer');
	}

	public function home()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('users/home.php');
		$this->load->view('templates/footer');
	}


}