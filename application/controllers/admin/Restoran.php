<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['title'] = "Data Restoran | Food Orderings";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['restoran'] = $this->db->query("SELECT * FROM restoran r, res_kategori rk WHERE r.id_kategori=rk.id_kategori ORDER BY id_restoran DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/restoran');
		$this->load->view('templates_admin/footer');
	}

	public function restoran_grid()
	{
		$data['title'] = "Data Restoran Grid | Food Orderings";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['restoran'] = $this->db->query("SELECT * FROM restoran r, res_kategori rk WHERE r.id_kategori=rk.id_kategori ORDER BY id_restoran DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/restoran_grid');
		$this->load->view('templates_admin/footer');
	}

	public function menu_restoran($id)
	{
		$data['title'] = "Update Restoran | Food Orderings";
		$data['detail'] = $this->db->query("SELECT * FROM restoran r, foods m WHERE r.id_restoran=m.id_restoran AND r.id_restoran='$id'")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/menu_restoran');
		$this->load->view('templates_admin/footer');
	}

	public function edit_restoran($id)
	{
		$data['title'] = "Update Restoran | Food Orderings";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['detail'] = $this->db->query("SELECT * FROM restoran r, res_kategori rk WHERE r.id_kategori=rk.id_kategori AND r.id_restoran='$id' ORDER BY id_restoran DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_restoran');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_restoran()
	{
		$id_kategori 		= htmlspecialchars($this->input->post('id_kategori'));
		$nama_restoran 		= htmlspecialchars($this->input->post('nama_restoran'));
		$alamat 			= htmlspecialchars($this->input->post('alamat'));
		$email 				= htmlspecialchars($this->input->post('email'));
		$no_hp 				= htmlspecialchars($this->input->post('no_hp'));
		$buka_restoran 		= htmlspecialchars($this->input->post('buka_restoran'));
		$tutup_restoran 	= htmlspecialchars($this->input->post('tutup_restoran'));
		$o_days 			= htmlspecialchars($this->input->post('o_days'));
		$url 				= htmlspecialchars($this->input->post('url'));
		$gambar 			= $_FILES['gambar']['name'];

		if($gambar){
			$config ['upload_path'] = './assets/uploads/restoran';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar') ){
				$gambar = $this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Photo Restoran Gagal Diupload!";

			}
		}

		$data = array(
			'id_kategori' 	=> $id_kategori,
			'nama_restoran' => $nama_restoran,
			'alamat' 		=> $alamat,
			'email' 		=> $email,
			'no_hp' 		=> $no_hp,
			'buka_restoran' => $buka_restoran,
			'tutup_restoran'=> $tutup_restoran,
			'o_days' 		=> $o_days,
			'url' 			=> $url,
			'gambar' 		=> $gambar



		);

		$this->restoran_model->insert_restoran($data,'restoran');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
			Data Restoran Berhasil di <strong>Tambahkan!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/restoran/restoran_grid');

	}

	public function update_restoran_aksi()
	{
		$id_restoran 	= $this->input->post('id_restoran');
		
		$id_kategori 		= htmlspecialchars($this->input->post('id_kategori'));
		$nama_restoran 		= htmlspecialchars($this->input->post('nama_restoran'));
		$alamat 			= htmlspecialchars($this->input->post('alamat'));
		$email 				= htmlspecialchars($this->input->post('email'));
		$no_hp 				= htmlspecialchars($this->input->post('no_hp'));
		$buka_restoran 		= htmlspecialchars($this->input->post('buka_restoran'));
		$tutup_restoran 	= htmlspecialchars($this->input->post('tutup_restoran'));
		$o_days 			= htmlspecialchars($this->input->post('o_days'));
		$url 			= htmlspecialchars($this->input->post('url'));
		$gambar 			= $_FILES['gambar']['name'];

		if($gambar){
			$config ['upload_path'] = './assets/uploads/restoran';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar') ){
				$gambar = $this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Photo Restoran Gagal Diupload!";

			}
		}

		$data = array(
			'id_kategori' 	=> $id_kategori,
			'nama_restoran' => $nama_restoran,
			'alamat' 		=> $alamat,
			'email' 		=> $email,
			'no_hp' 		=> $no_hp,
			'buka_restoran' => $buka_restoran,
			'tutup_restoran'=> $tutup_restoran,
			'o_days' 		=> $o_days,
			'url' 			=> $url
		);

		$where = array('id_restoran' => $id_restoran);

		$this->restoran_model->update_data($where,$data,'restoran');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
			Data Restoran Berhasil di <strong>Update!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/restoran/restoran_grid');	
	}


	public function delete_restoran($id)
	{
		$where = array('id_restoran' => $id);
		$this->restoran_model->hapus_data($where,'restoran');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
			Data Restoran Berhasil di <strong>Delete!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/restoran/restoran_grid');
	}


}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */