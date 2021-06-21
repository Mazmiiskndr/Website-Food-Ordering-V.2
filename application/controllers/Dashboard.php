<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['restoran'] = $this->db->query("SELECT * FROM restoran r, res_kategori rk WHERE r.id_kategori=rk.id_kategori ORDER BY id_restoran DESC")->result();
		$data['foods'] = $this->db->query("SELECT * FROM foods f, restoran r WHERE f.id_restoran=r.id_restoran ORDER BY id_foods DESC")->result();
		$data['title'] = 'Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/index');
		$this->load->view('templates_home/footer');
	}

	public function foods_detail($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM foods f, restoran r WHERE f.id_restoran=r.id_restoran AND f.id_foods='$id' ORDER BY id_foods DESC")->result();
		$data['title'] = 'Detail Menu | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/foods_detail');
		$this->load->view('templates_home/footer');
	}

	public function restoran_detail($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM restoran r, res_kategori rk WHERE r.id_kategori=rk.id_kategori AND r.id_restoran='$id' ORDER BY id_restoran DESC")->result();
		$data['title'] = 'Detail Restoran | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/restoran_detail');
		$this->load->view('templates_home/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */