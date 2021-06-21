<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

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
		$this->load->view('home/order');
		$this->load->view('templates_home/footer');		
	}

	public function order_detail($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM transaksi t, users u, restoran r, foods f WHERE t.id_users=u.id_users AND t.id_restoran=r.id_restoran AND t.id_foods=f.id_foods AND id_transaksi='$id'")->result();
		$data['title'] = 'Detail Order | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/order_detail');
		$this->load->view('templates_home/footer');	
	}

	

	public function print_order($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM transaksi t, users u, restoran r, foods f WHERE t.id_users=u.id_users AND t.id_restoran=r.id_restoran AND t.id_foods=f.id_foods AND id_transaksi='$id'")->result();
		$data['title'] = 'Detail Order | Food Orderings';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('home/print_order');
	}


	public function batal_order($id)
	{
		$where = array('id_transaksi' => $id);
		$this->foods_model->hapus_data($where,'transaksi');
		$this->session->set_flashdata('pesan','
				<div style="" class="alert alert-danger alert-dismissible fade show" role="alert">
				Recent Order Berhasil di <strong>Hapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
		redirect('home/order');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/home/Transaksi.php */