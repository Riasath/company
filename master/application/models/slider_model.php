<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_model {



public function select_all_slider_info(){


	$this->db->select('*');
	$this->db->from('slider');
	$query_result=$this->db->get();
	$result=$query_result->result();


	return $result;
}













}
