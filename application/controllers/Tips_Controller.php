<?php 

/**
* 
*/
class Tips_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->model('Tips_Model');
	}

	public function show_tips()
	{
		$data['tips'] = $this->Tips_Model->get_all_tips();
		// var_dump($data);
		// die();
		$this->load->view('Header');
		$this->load->view('Tips',$data);
		// echo "<pre>";
		// var_dump($data);
		// die();
		// echo "</pre>";
	}

	public function get_tip($id)
	{
		if ($id === NULL) {
			return false;
		} else {
			$tip = array('details' => $this->Tips_Model->get_one_tips($id) , );
		}
		// echo "<pre>";
		// var_dump($tip);
		// die();
		// echo "</pre>";
		$this->load->view('Header');
		$this->load->view('Detail_Tips', $tip);
	}
}

 ?>