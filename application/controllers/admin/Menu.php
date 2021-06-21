<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['title'] = "Data Menu | Food Orderings";
		$data['restoran'] = $this->reskategori_model->tampil_data('restoran')->result();
		$data['foods'] = $this->db->query("SELECT * FROM foods f, restoran r WHERE f.id_restoran=r.id_restoran ORDER BY id_foods DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/menu');
		$this->load->view('templates_admin/footer');
	}

	public function menu_list()
	{
		$data['title'] = "Data Menu List | Food Orderings";
		$data['restoran'] = $this->reskategori_model->tampil_data('restoran')->result();
		$data['foods'] = $this->db->query("SELECT * FROM foods f, restoran r WHERE f.id_restoran=r.id_restoran ORDER BY id_foods DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/menu_list');
		$this->load->view('templates_admin/footer');
	}


	public function edit_menu($id)
	{
		$data['title'] = "Update Menu | Food Orderings";
		$data['detail'] = $this->db->query("SELECT * FROM foods f, restoran r WHERE f.id_restoran=r.id_restoran AND f.id_foods='$id' ORDER BY id_foods DESC")->result();
		$data['restoran'] = $this->reskategori_model->tampil_data('restoran')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_menu');
		$this->load->view('templates_admin/footer');
	}

	public function update_menu_aksi()
	{
		$id_restoran 	= $this->input->post('id_restoran');
		$id_foods 		= $this->input->post('id_foods');
		
		$nama_foods 	= htmlspecialchars($this->input->post('nama_foods'));
		$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
		$harga 			= htmlspecialchars($this->input->post('harga'));
		
		$gambar_foods 			= $_FILES['gambar_foods']['name'];

		if($gambar_foods){
			$config ['upload_path'] = './assets/uploads/restoran';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar_foods') ){
				$gambar_foods = $this->upload->data('file_name');
				$this->db->set('gambar_foods',$gambar_foods);
			}else{
				echo "Photo Restoran Gagal Diupload!";

			}
		}

		$data = array(
			'id_restoran' 	=> $id_restoran,
			'nama_foods' 	=> $nama_foods,
			'harga' 		=> $harga,
			'deskripsi' 	=> $deskripsi
		);

		$where = array('id_foods' => $id_foods);

		$this->foods_model->update_data($where,$data,'foods');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
			Data Menu Berhasil di <strong>Update!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/menu');	
	}


	public function tambah_menu()
	{
		$id_restoran 	= htmlspecialchars($this->input->post('id_restoran'));
		$nama_foods 	= htmlspecialchars($this->input->post('nama_foods'));
		$harga 			= htmlspecialchars($this->input->post('harga'));
		$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
		$gambar_foods 		= $_FILES['gambar_foods']['name'];

		if($gambar_foods){
			$config ['upload_path'] = './assets/uploads/menu';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar_foods') ){
				$gambar_foods = $this->upload->data('file_name');
				$this->db->set('gambar_foods',$gambar_foods);
			}else{
				echo "Photo Menu Gagal Diupload!";

			}
		}

		$data = array(
			'id_restoran' 	=> $id_restoran,
			'nama_foods' 	=> $nama_foods,
			'harga' 		=> $harga,
			'deskripsi' 	=> $deskripsi,
			'gambar_foods' 	=> $gambar_foods



		);

		$this->foods_model->insert_foods($data,'foods');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
			Data Menu Berhasil di <strong>Tambahkan!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/menu');

	}

	public function delete_menu($id)
	{
		$where = array('id_foods' => $id);
		$this->foods_model->hapus_data($where,'foods');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
			Data Menu Berhasil di <strong>Delete!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/menu');
	}


}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */