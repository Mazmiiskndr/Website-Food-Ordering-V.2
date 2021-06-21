<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
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
		$data['order'] = $this->cart->contents();
		$data['title'] = 'Shop | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/cart');
		$this->load->view('templates_home/footer');
	}

	public function update_cart() {
   

        $i = 1;
        foreach ($this->cart->contents() as $items) {
        	$data = array (
                	'rowid' => $items['rowid'],
                	'qty'   => $this->input->post($i.'[qty]')
          		);
            $update = $this->cart->update($data);
            $i++;
        }


        redirect('home/cart');
    }



	public function tambah_cart($id)
	{
		$foods = $this->foods_model->find($id);

		$data = array(
			'id' => $foods->id_foods,
			'id_restoran' => $foods->id_restoran,
			'qty' => 1,
			'price' => $foods->harga,
			'name' => $foods->nama_foods,
			'image' => $foods->gambar_foods
		);
		$this->cart->insert($data);

		redirect('home/cart');

	}

	public function delete($id)
	{
		$delete = $this->cart->remove($id);
		redirect('home/cart');
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/home/Cart.php */