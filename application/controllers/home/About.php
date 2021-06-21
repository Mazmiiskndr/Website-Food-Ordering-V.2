<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Shop | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/about');
		$this->load->view('templates_home/footer');
	}

}

/* End of file Shop.php */
/* Location: ./application/controllers/home/Shop.php */