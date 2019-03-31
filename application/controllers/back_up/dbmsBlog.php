<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbmsBlog extends CI_Controller {
	// Calling admin Functions - localhost/blog/admin/dbmsBlog/<function Name>
	// localhost/blog/ not available
	// localhost/blog/admin/dbmsblog not available
	// Clean URLs not implemented
	
	public function login()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/login_page');
		$this->load->view('templates/admin/footer');
	}

	public function publish()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_publish');
		$this->load->view('templates/admin/footer');
	}

	public function comment()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/blogpost_comment');
		$this->load->view('templates/admin/footer');
	}


	public function user_list()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_page');
		$this->load->view('templates/admin/footer');
	}

	public function view()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_view');
		$this->load->view('templates/admin/footer');
	}

		public function reply()
	{
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/nav.php');
		$this->load->view('users/admin_message.php');
		$this->load->view('templates/admin/footer');
	}


	public function contact()
	{
		$this->load->view('templates/headerHome');
		$this->load->view('templates/nav.php');
		$this->load->view('templates/footer');
	}


}
