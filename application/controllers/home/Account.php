<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
    }

	public function index()
	{
		$id = $this->session->userdata('id_users');
		$data['users'] = $this->db->query("SELECT * FROM users WHERE users.id_users='$id'")->result();
		// var_dump($data['users']);die;
		$data['title'] = 'Account | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/account');
		$this->load->view('templates_home/footer');		
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/home/Account.php */