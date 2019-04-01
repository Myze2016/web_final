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

		if($email == "admin" && $password == "1234") {
			$newdata = array(
					'admin' => TRUE,
			        'email'     => $email,
			        'logged_in' => TRUE
				);

				$this->session->set_userdata($newdata);
				header('location:'.base_url(). "controller/user_list");
		} else {
		$userExists  =  $this->user_model->check_email($email);
		if(!$userExists){

			$this->output->set_status_header(404);
			$this->output
        			->set_content_type('application/json')
					->set_output(json_encode(array('message' =>  'Email does not exist!' )));

		} else {
			$correctLogin = $this->user_model->check_valid($email,$password);
		
			$id =  $this->user_model->check_id($email);
			
			if ($correctLogin) {
				$newdata = array(
			        'user' => TRUE,
			        'email'     => $email,
			        'logged_in' => TRUE,
			        'id' => $id,
				);

				$this->session->set_userdata($newdata);
				header('location:'.base_url(). "controller/home");
			} else {
				header('location:'.base_url(). "controller/login");
			}
		}		
}}
	

	public function publish_blog() {

		$words  =   $this->input->post('words');
		$image  =  $this->input->post('image');
		$title  =  $this->input->post('Title');

		$this->load->database();
		$this->load->model('user_model');
		$data   =  array(
				'words' => $words,
				'image' => $image,
				'title' => $title,
			);
		$result   = $this->user_model->save($data);
		header('Location:  '  . base_url('controller/publish'));
	}
	
	public function comment($id)
	{
		
		$this->load->database();
		$this->load->model('user_model');
		if ((isset($_SESSION['user']))) {
			$data = array(
				'users' => $this->user_model->get_blogs($id),
				'blogs' => $this->user_model->get_users($_SESSION['id']),
				'comment' => $this->user_model->get_comment($id),
			);
		}
		else {
			$data = array(
			'users' => $this->user_model->get_blogs($id),
			'blogs' => $this->user_model->get_users(NULL)
			);
		};
		
		
	
		

		
		// ---> insert homepage headers/nav/footer
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/blogpost_comment', $data);
		$this->load->view('templates/footer');
	}

	public function save_comment()
	{
		$blogid = $this->input->post('blogid');
		$userid = $this->input->post('userid');
		$comment = $this->input->post('comment');
		$this->load->database();
		$this->load->model('user_model');
		$data   =  array(
				'blogid' => $blogid,
				'userid' => $userid,
				'comment' => $comment,
			);
		$result   = $this->user_model->save_comment($data);
		header('Location:  '  . base_url('controller/view'));

	}

	public function publish()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_publish');
		$this->load->view('templates/admin/footer');
	}


	public function blog_list()
	{

		$this->load->database();
		$this->load->model('user_model');
		$data  = array('users' => $this->user_model->view_all());
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_page_user',$data);
		$this->load->view('templates/admin/footer');
	}

	public function message() {
		$id = $_SESSION['id'];
		echo $id;
	}
	public function message_list()
	{

		$this->load->database();
		$this->load->model('user_model');
		$data  = array('users' => $this->user_model->view_all_message());
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_page_message',$data);
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

		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/admin_view',$data);
		$this->load->view('templates/footer');
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
		$this->load->database();
		$this->load->model('user_model');
		$data  = array('blogs' => $this->user_model->view_all());
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('users/home.php', $data);
		$this->load->view('templates/footer');
	}
	public function update(){

		
			$words  =   $this->input->post('words');
			$image  =  $this->input->post('image');
			$title  =  $this->input->post('Title');
			$id = $this->input->post('id');
			echo var_dump($words);
			$this->load->database();
			$data   =  array(
					'words' => $words,
					'image' => $image,
					'title' => $title,
				);
			$this->load->model('user_model');
			$result   = $this->user_model->save_update($data, $id);
			
			if($result > 0){
				//Query is success
				header('Location:  '    . base_url('controller/user_list'));
			}else{
				//Data not inserted
			}
		
	}


public function edit($id){  //edit by id /folder/class/method/parameters = edit($id)
		$this->load->database();
		$this->load->model('user_model'); //edit using id
		$data = array('users'=>$this->user_model->get_blogs($id));
		
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/edit_user',$data);
		$this->load->view('templates/footer');
}	



	public function delete($id){
		$this->load->database();
		$this->load->model('user_model');
		$result = $this->user_model->delete_user($id);
		if($result > 0){
				//Query is success
				header('Location:  '    . base_url('controller/user_list'));
			}else{
				//Data not inserted
			}
		}

}
