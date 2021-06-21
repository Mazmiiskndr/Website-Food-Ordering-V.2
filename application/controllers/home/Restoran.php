<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran extends CI_Controller {

	public function index()
	{
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['restoran'] = $this->db->query("SELECT * FROM restoran r, res_kategori rk WHERE r.id_kategori=rk.id_kategori ORDER BY id_restoran DESC")->result();
		// $data['foods'] = $this->db->query("SELECT * FROM foods f, restoran r WHERE f.id_restoran=r.id_restoran ORDER BY id_foods DESC")->result();
		$data['title'] = 'Restoran | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/restoran');
		$this->load->view('templates_home/footer');
	}

	public function menu_restoran($id)
	{
		$data['title'] = "Menu Restoran | Food Orderings";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['restoran'] = $this->restoran_model->tampil_data('restoran')->result();
		$data['detail'] = $this->db->query("SELECT * FROM restoran r, foods m WHERE r.id_restoran=m.id_restoran AND r.id_restoran='$id'")->result();
		$data['title'] = 'Restoran | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/menu_restoran');
		$this->load->view('templates_home/footer');
	}

	public function kategori_restoran($id)
	{
		$data['title'] = "Menu Restoran | Food Orderings";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['restoran'] = $this->db->query("SELECT * FROM restoran r, res_kategori rk WHERE r.id_kategori=rk.id_kategori AND rk.id_kategori='$id'")->result();
		$data['title'] = 'Restoran | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/restoran');
		$this->load->view('templates_home/footer');
	}

}

/* End of file Restoran.php */
/* Location: ./application/controllers/home/Restoran.php */