<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

	public function admin_login_info($adminname,$adminpassword){

$this->db->select('*');
$this->db->from('tbl_admin');
$this->db->where('adminname',$adminname);


$this->db->where('adminpassword',$adminpassword);


$query_result=$this->db->get();
$result=$query_result->row();
return $result;
	}

public function save_users_info(){



		$data=array();
		$data['first_name']=$this->input->post('first_name',true);
		$data['last_name']=$this->input->post('last_name',true);
		$data['username']=$this->input->post('username',true);
		$data['password']=$this->input->post('password',true);
		$this->db->insert('users',$data);
	}
	public function all_users_info(){


$this->db->SELECT('*');
$this->db->FROM('users');
$query_result=$this->db->get();
 $users_info=$query_result->result();
 return $users_info;



	}
		public function users_login_info($username,$password){

$this->db->select('*');
$this->db->from('users');
$this->db->where('username',$username);


$this->db->where('password',$password);


$query_result=$this->db->get();
$result=$query_result->row();
return $result;
	}
	
}
