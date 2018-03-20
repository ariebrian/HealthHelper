<?php 

/**
* 
*/
class Tips_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_tips()
	{
		$this->db->insert('tips', $data);
	}

	public function get_all_tips()
	{
		$this->db->select('*');
		$this->db->from('tips');
		// $this->db->join('tags','tips.tags = tags.id');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_one_tips($id)
	{
		$this->db->select('*');
		$this->db->from('tips');
		// $this->db->join('tags','tips.tags = tags.id');
		$this->db->where('tips.id',$id);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
		
	}
}

?>