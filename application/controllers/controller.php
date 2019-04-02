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

	public function contact() {


		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');	
		$this->load->view('users/contactpage');
		$this->load->view('templates/footer');
	}


	public function add_contact(){
		if (!(isset($_SESSION['user']))) {
				header('Location:  '  . base_url('login'));
			}
		else {
		$message = $this->input->get('message');
		$this->load->database();
		$this->load->model('user_model');
		$data   =  array(
				'message' => $message,
				'user_id' => $_SESSION['id']
			);
		$result   = $this->user_model->save_contact($data);
			header('Location:  '  . base_url('controller/contact'));
		};
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
			header('location:'.base_url('register'));
			
		}
		else {
			//Form has errors
			$this->form_validation->set_error_delimiters(null, null);
			$err =  array(
				'username' =>form_error('username'),
				'password' => form_error('password'),
				'email' => form_error('email')
			);
			
			echo validation_errors();

			//header('location:'.base_url('register'));
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
			        'logged_in' => TRUE,
			        'username' => "Admin"
				);

				$this->session->set_userdata($newdata);
				header('location:'.base_url(). "userlist");
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
			$username = $this->user_model->check_username($email);
			if ($correctLogin) {
				$newdata = array(
			        'user' => TRUE,
			        'email'     => $email,
			        'logged_in' => TRUE,
			        'id' => $id,
			        'username' => $username,
				);

				$this->session->set_userdata($newdata);
				header('location:'.base_url(). "home");
			} else {
				header('location:'.base_url(). "login");
			}
		}		
}}
	

	public function publish_blog() {
		$this->load->database();
		$this->load->model('user_model');
		$this->form_validation->set_rules('words','Words','required');
		$this->form_validation->set_rules('image','Image','required');
		$this->form_validation->set_rules('Title','title','required');
		

		$words  =   $this->input->post('words');
		$image  =  $this->input->post('image');
		$title  =  $this->input->post('Title');

		$isValidated  =  $this->form_validation->run();
		if($isValidated){
			$data   =  array(
				'words' => $words,
				'image' => $image,
				'title' => $title,
			);
			$result   = $this->user_model->save($data);
			header('Location:  '  . base_url('articles'));
			
		}
		else {
			//Form has errors
			$this->form_validation->set_error_delimiters(null, null);
			$errors  =  array(
				'words' =>form_error('words'),
				'image' => form_error('image'),
				'Title' => form_error('title')
			);

			header('location:'.base_url('publish'));
		}
	
		/**$words  =   $this->input->post('words');
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
		header('Location:  '  . base_url('controller/publish'));**/
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
				'comment' => $this->user_model->get_comment($id),
			);
			
		}

	
		

		
		// ---> insert homepage headers/nav/footer
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/blogpost_comment', $data);
		$this->load->view('templates/footer');
	}

	public function save_comment()
	{
		if (!(isset($_SESSION['user']))) {
			header('Location:  '  . base_url('login'));
		}
		else {
		$blogid = $this->input->get('blogid');
		$userid = $this->input->get('userid');
		$comment = $this->input->get('comment');
		$this->load->database();
		$this->load->model('user_model');
		$data   =  array(
				'blogid' => $blogid,
				'userid' => $userid,
				'comment' => $comment,
			);
		$result   = $this->user_model->save_comment($data);
			header('Location:  '  . base_url('articles'));
		};
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
		$this->load->view('users/message_list',$data);
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
		$data  = array('blogs' => $this->user_model->view_all_latest());
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

	public function view_user($id){
		$this->load->database();
		$this->load->model('user_model');
		$data  = array('users' => $this->user_model->get_users($id));
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/view_user',$data);
		$this->load->view('templates/footer');
	}
	

public function edit_user($id){  //edit by id /folder/class/method/parameters = edit($id)
		$this->load->database();
		$this->load->model('user_model'); //edit using id
		$data  = array('users' => $this->user_model->get_users($id));
		//$data = array('users'=>$this->user_model->get_indi($id));
		
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/edit_userlist',$data);
		$this->load->view('templates/footer');
	}

public function update_user(){
		$this->load->model('user_model');
		$id = $this->input->post('number');
		$this->load->database();
		$data   =  array(
				'username' => $this->input->post('username'),
				'password'=> $this->input->post('password'),
				'email' => $this->input->post('email'),
				
			);
		$this->db->where('id', $id);
		$this->db->update('users', $data); 
		$result   =	$this->db->affected_rows();
		if($result > 0){
			//Query is success
			header('Location:  '    . base_url('controller/user_list'));
		}else{
			echo "data not successfuly updated";

			}}



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
				header('Location:  '    . base_url('bloglist'));
			}else{
				header('Location:  '    . base_url('bloglist'));
			}
		}

		public function delete_message($id){
		$this->load->database();
		$this->load->model('user_model');
		$result = $this->user_model->delete_message($id);
		if($result > 0){
				//Query is success
				header('Location:  '    . base_url('controller/message_list'));
			}else{
				header('Location:  '    . base_url('bloglist'));
			}
		}


		public function delete_article($id){
		$this->load->database();
		$this->load->model('user_model');
		$result = $this->user_model->delete_article($id);
		if($result > 0){
				//Query is success
				header('Location:  '    . base_url('bloglist'));
			}else{
				header('Location:  '    . base_url('bloglist'));
			}
		}
}
