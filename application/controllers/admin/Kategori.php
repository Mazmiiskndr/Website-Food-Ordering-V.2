<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['title'] = "Data Kategori Restoran | Food Orderings";
		$data['res_kategori'] = $this->db->query("SELECT * FROM res_kategori ORDER BY id_kategori DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kategori');
		$this->load->view('templates_admin/footer');
	}

	public function edit_kategori($id)
	{
		$data['title'] = "Update Kategori Restoran | Food Orderings";
		$data['detail'] = $this->reskategori_model->ambil_id_kategori($id);
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_kategori');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_kategori()
	{
		$nama_kategori 		= htmlspecialchars($this->input->post('nama_kategori'));

		$data = array(
			'nama_kategori' => $nama_kategori,
		);

		$this->reskategori_model->insert_kategori($data,'res_kategori');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
			Data Kategori Restoran Berhasil di <strong>Tambahkan!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/kategori');

	}

	public function update_kategori_aksi()
	{
		$id_kategori 	= $this->input->post('id_kategori');
		$nama_kategori 	= htmlspecialchars($this->input->post('nama_kategori'));

		$data = array(

			'nama_kategori' 		=> $nama_kategori,

		);

		$where = array('id_kategori' => $id_kategori);

		$this->reskategori_model->update_data($where,$data,'res_kategori');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
			Data Kategori Restoran Berhasil di <strong>Update!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/kategori');
	}


	public function delete_kategori($id)
	{
		$where = array('id_kategori' => $id);
		$this->reskategori_model->hapus_data($where,'res_kategori');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
			Data Kategori Restoran Berhasil di <strong>Delete!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/kategori');
	}


}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */