<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		$this->load->helper('date');
	}


	public function index()
	{
		if($this->cart->total_items() <= 0) {
			$this->session->set_flashdata('pesan','
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
				Silahkan Belanja  <strong>Dulu!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('home/shop');
		}
		
		$data['orders'] = $this->cart->contents();
		$data['bank'] = $this->db->query("SELECT * FROM bank")->result();

		$data['title'] = 'Checkout | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/checkout');
		$this->load->view('templates_home/footer');		
	}

	public function tambah_order()
	{
		$id_users 	= $this->session->userdata('id_users');
		$alamat_users 	= htmlspecialchars($this->input->post('alamat_users'));
		

		
		$data = array(
			'alamat_users' => $alamat_users,
		);
		$where = array(
			'id_users' => $id_users,
		);
		$this->users_model->update_data($where,$data,'users');
		$order = $this->placeOrder($id_users);
		if($order) {
			$this->session->set_flashdata('pesan','
				<div style="" class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('home/order');
		} else {
			$this->session->set_flashdata('pesan','
				<div style="" class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('home/shop');
		}
		
		$this->session->set_flashdata('pesan','
			<div style="" class="alert alert-success alert-dismissible fade show" role="alert">
			Terima Kasih Telah  <strong>Order!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('home/order');


	}


	public function placeOrder($id_users) {  
		$items = $this->cart->contents();
		$i = 0;
		foreach($items as $item) {
			$orderData[$i]['id_users'] = $id_users;
			$orderData[$i]['id_foods'] = $item['id'];
			$orderData[$i]['id_restoran'] = $item['id_restoran'];
			$orderData[$i]['nama_foods'] = $item['name'];
			$orderData[$i]['qty'] = $item['qty'];
			$orderData[$i]['total'] = $item['subtotal'];
			$orderData[$i]['tanggal'] = date('Y-m-d H:i:s', now());
			$orderData[$i]['success_date'] = date('Y-m-d H:i:s', now());
			$i++;
		}
		if(!empty($orderData)) {                
			$insertOrder = $this->transaksi_model->insertOrder($orderData);
			if($insertOrder) {
				$this->cart->destroy();
                //return order id
				return $insertOrder;
			}
		}   

	}
}

	/* End of file Checkout.php */
/* Location: ./application/controllers/home/Checkout.php */