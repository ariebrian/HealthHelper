<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	
  
	public function Home()
	{
		$this->load->view('Header');
		$this->load->view('content');
	}

	public function Crowd()
	{
		$this->load->view('Header');
		$this->load->view('Crowd');
	}

	public function Tips()
	{
		$this->load->view('Header');
		$this->load->view('Tips');
	}
	public function Diagnosa()
	{
		$this->load->view('Header');
		$this->load->view('Diagnosa');
	}
	public function Detail()
	{
		$this->load->view('Header');
		$this->load->view('Detail');
	}

	public function insertcrowd()
	{
		$this->load->view('Header');
		$this->load->view('insertcrowd');
	}

	public function detail_tips()
	{
		$this->load->view('Header');
		$this->load->view('Detail_Tips');
	}

}

?>