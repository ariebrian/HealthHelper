<?php

// <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crowd_Model extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_some_case()
	{
		$this->db->select('*');
		$this->db->from('crowdfunding');
		$this->db->join('user', 'user.id = crowdfunding.user');
		$this->db->limit(8);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('crowdfunding');
		$this->db->join('user', 'crowdfunding.user = user.id');
		$this->db->order_by('urgensi', 'desc');
		$query = $this->db->get();
		// var_dump($query);
		// die();
		return $query->result();
	}

	public function get_one($id)
	{
		$this->db->select('*');
		$this->db->from('crowdfunding');
		$this->db->join('user', 'user.id = crowdfunding.user');
		$this->db->where('crowdfunding.id', $id);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function insert_case($data)
	{
		$this->db->insert('crowdfunding', $data);
	}

}

/* End of file  */
/* Location: ./application/models/ */

 ?>