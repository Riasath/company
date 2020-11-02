<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Model
{

	public function set_data($table, $data)
	{
		$this->db->trans_start();
		$this->db->insert($table, $data);
		$returnValue = $this->db->insert_id();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$error = $this->db->error();
			print_r($error);
		} else {
			return $returnValue;
		}
	}



	public function get_data($table)
	{
		$query = $this->db->get($table);
		if ($this->db->affected_rows() > 0) {
			return $query;
		} else {
			return FALSE;
		}
	}

	public function get_data_multi_conditional($table, $data)
	{
		$this->db->where($data);
		$query = $this->db->get($table);
		return $query;
//		if ($this->db->affected_rows() > 0) {
//			return $query;
//		} else {
//			return 1;
//		}
	}

	public function get_data_single_conditional($table, $index, $data)
	{
		$this->db->where($index, $data);
		$query = $this->db->get($table);
		return $query;

//		if ($this->db->affected_rows() > 0) {
//			return $query;
//		} else {
//			return $query;
//		}
	}


	public function get_single_row_information($table, $index, $data)
	{
		$this->db->where($index, $data);
		$query = $this->db->get($table);
		if ($this->db->affected_rows() > 0) {
			return $query->row();
		} else {
			return FALSE;
		}
	}


	function delete_data($table, $index, $data)
	{
		$this->db->where($index, $data);
		$this->db->delete($table);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}


	public function update_data($table, $index, $identifier, $data)
	{
		$this->db->where($index, $identifier);
		$this->db->update($table, $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}


	}

	function pegination_count($table, $index, $identifier)
	{
		$this->db->where($index, $identifier);
		$query = $this->db->get($table);
		$rowcount = $query->num_rows();
		return $rowcount;
	}

	public function count_data($table, $index, $data)
	{
		$this->db->where($index, $data);
		$this->db->get($table);
		if ($this->db->affected_rows() > 0) {
			return $this->db->affected_rows();
		} else {
			return 0;
		}
	}

	public function count_data_search_like($table, $index, $data, $where_data)
	{
		$this->db->like($index, $data, 'both');
		$this->db->where($where_data);
		$this->db->get($table);
		if ($this->db->affected_rows() > 0) {
			return $this->db->affected_rows();
		} else {
			return 0;
		}
	}

	public function count_all($table)
	{

		$this->db->get($table);
		if ($this->db->affected_rows() > 0) {
			return $this->db->affected_rows();
		} else {
			return 0;
		}
	}

//pagination start

	public function getData($rowno, $rowperpage, $table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->limit($rowperpage, $rowno);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_Data_member_table($rowno, $rowperpage)
	{
		$this->db->select('member.*,member_info.*');
		$this->db->from('member_info');
		$this->db->join('member', 'member.m_candidate_id=member_info.mi_candidate_id');
		$this->db->limit($rowperpage, $rowno);
		$this->db->where('member.m_status!=', 2);
		$query = $this->db->get();
		return $query->result();
	}

	// Select total records
	public function getrecordCount($table)
	{
		$this->db->select('count(*) as allcount');
		$this->db->from($table);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result[0]['allcount'];
	}

	//pagination end
	public function get_data_view_multi_conditional($table, $data)
	{
		$this->db->where($data);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_data_view_multi_conditional_join($id)
	{
		$this->db->select('member.*,member_info.*');
		$this->db->from('member_info');
		$this->db->join('member', 'member.m_candidate_id=member_info.mi_candidate_id');
		$this->db->where('member.m_candidate_id', $id);
		$this->db->where('member.m_status!=', 2);
		$query = $this->db->get();
		return $query->result();
	}


	public function get_current_page_records($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("member_info");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}

	public function get_total()
	{
		return $this->db->count_all("member_info");
	}

	

	// slider 
	public function all_slider_list_by_id($slider_id){

$this->db->SELECT('*');
$this->db->FROM('slider');
$this->db->WHERE('slider_id',$slider_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;



	}





	public function update_slider_list(){

		$data=array();
		$slider_id=$this->input->post('slider_id',true);
		


		$sdata=array();
             $error="";
             $config['upload_path']             = 'assets/slider_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('slider_image')){

             	$error=$this->upload->display_errors();
             }
             else{

             	$sdata=$this->upload->data();
             	$data['slider_image']=$config['upload_path'].$sdata['file_name'];
             }
	
		$data['slider_descriptions']=$this->input->post('slider_descriptions',true);
		$data['slider_about']=$this->input->post('slider_about',true);
		$this->db->WHERE('slider_id',$slider_id);
		$this->db->update('slider',$data);
	}
    public function slider_delete_by_id($slider_id){


$this->db->where('slider_id',$slider_id);
$this->db->delete('slider');

	}
}


