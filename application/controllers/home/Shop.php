<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['restoran'] = $this->restoran_model->tampil_data('restoran')->result();
		$data['foods'] = $this->db->query("SELECT * FROM foods f, restoran r WHERE f.id_restoran=r.id_restoran ORDER BY id_foods DESC")->result();
		$data['title'] = 'Shop | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/shop');
		$this->load->view('templates_home/footer');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['foods'] = $this->foods_model->get_keyword($keyword);
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['restoran'] = $this->restoran_model->tampil_data('restoran')->result();
		
		$data['title'] = 'Shop | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/shop');
		$this->load->view('templates_home/footer');
	}
}

/* End of file Shop.php */
/* Location: ./application/controllers/home/Shop.php */