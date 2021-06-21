<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['title'] = "Data Laporan | Food Orderings";
		$dari 		= $this->input->post('dari');
		$sampai 	= $this->input->post('sampai');

		$this->_rules();

		if($this->form_validation->run() == false){
			$this->load->view('templates_admin/header',$data);
			$this->load->view('templates_admin/topbar');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/laporan');
			$this->load->view('templates_admin/footer');
		}else{
			$data['laporan'] = $this->db->query("SELECT * FROM transaksi t, users u, foods f, restoran r WHERE t.id_users=u.id_users AND t.id_foods=f.id_foods AND t.id_restoran=r.id_restoran AND date(tanggal) >= '$dari' AND date(tanggal) >= '$sampai'")->result();
			$this->load->view('templates_admin/header',$data);
			$this->load->view('templates_admin/topbar');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/tampilkan_laporan');
			$this->load->view('templates_admin/footer');
		}

	}

	public function print_laporan()
	{
		$dari = $this->input->get('dari');
		$sampai = $this->input->get('sampai');
		$data['title'] = "Print Laporan Transaksi | Rental Mobil";
		$data['laporan'] = $this->db->query("SELECT * FROM transaksi t, users u, foods f, restoran r WHERE t.id_users=u.id_users AND t.id_foods=f.id_foods AND t.id_restoran=r.id_restoran AND date(tanggal) >= '$dari' AND date(tanggal) >= '$sampai'")->result();
		
		$this->load->view('admin/print_laporan',$data);
	}


	public function _rules()
	{
		$this->form_validation->set_rules('dari','Dari Tanggal','required');
		$this->form_validation->set_rules('sampai','Sampai Tanggal','required');
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/admin/Laporan.php */