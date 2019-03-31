<?php

	class User_model extends CI_Model {


		public function save($data){


			$this->db->insert('blog',$data);
			return $this->db->affected_rows();

		}
		public function save_user($data){


			$this->db->insert('users',$data);
			return $this->db->affected_rows();

		}

		public function view_all(){
			$this->db->select('id,words,image');
			$result    =  $this->db->get('blog');
			return $result->result_array();
		 }

		 public function blog($id) {
		 	$this->load->database();
			$this->load->model('user_model');
			$this->db->select('id,words,image');
			$this->db->from('blog');
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->result_array();
		 }
		

		 public function view_all_users(){
			 $this->db->select('id,username,email');
			$result    =  $this->db->get('users');

			return $result->result_array();
		 }
		

		public function check_email($email){
			$this->db->where('email',$email);
			$query = $this->db->get('users');
			return $query->num_rows();
		}

		public function check_valid($email,$password){
			$this->load->database();
			$this->load->model('user_model');
			$this->db->select('password');
			$this->db->from('users');
			$this->db->where('email', $email);
			

			$query = $this->db->get();
			$original = "";
			echo var_dump($query->result());
			foreach ($query->result() as $row)
			{
					
			        $original = $row->password;
			        echo var_dump($original);
			   
			}
			$valid = password_verify($password,$original);
			echo var_dump($valid);
			return $valid;
		}

		public function check_user($id){
			$this->db->where('id',$id);
			$query = $this->db->get('users');
			return $query->num_rows();
		}

		
	}