<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['title'] = "Data Users | Food Orderings";
		$data['users'] = $this->db->query("SELECT * FROM users ORDER BY id_users DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/users');
		$this->load->view('templates_admin/footer');
	}

	public function detail_users($id)
	{
		$data['title'] = "Detail Users | Food Orderings";
		$data['detail'] = $this->users_model->ambil_id_users($id);
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_users');
		$this->load->view('templates_admin/footer');
	}

	public function edit_users($id)
	{
		$data['title'] = "Update Users | Food Orderings";
		$data['detail'] = $this->users_model->ambil_id_users($id);
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_users');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_users()
	{
		$nama 			= htmlspecialchars($this->input->post('nama'));
		$alamat_users 		= htmlspecialchars($this->input->post('alamat_users'));
		$email 			= htmlspecialchars($this->input->post('email'));
		$password 		= md5($this->input->post('password'));
		$no_hp 			= htmlspecialchars($this->input->post('no_hp'));
		$gambar 		= $_FILES['gambar']['name'];

		if($gambar){
			$config ['upload_path'] = './assets/uploads/users';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar') ){
				$gambar = $this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Photo Users Gagal Diupload!";

			}
		}

		$data = array(
			'nama' 			=> $nama,
			'alamat_users' 		=> $alamat_users,
			'email' 		=> $email,
			'password'		=> $password,
			'no_hp' 		=> $no_hp,
			'gambar' 		=> $gambar,
			'role_id' 		=> 2,



		);

		$this->users_model->insert_users($data,'users');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
			Data Users Berhasil di <strong>Tambahkan!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/users');
	}

	public function update_users_aksi()
	{
		$id_users 	= $this->input->post('id_users');
		
		$nama 		= htmlspecialchars($this->input->post('nama'));
		$email 		= htmlspecialchars($this->input->post('email'));
		$no_hp 		= htmlspecialchars($this->input->post('no_hp'));
		$alamat_users 	= htmlspecialchars($this->input->post('alamat_users'));
		$gambar 	= $_FILES['gambar']['name'];

		if($gambar){
			$config ['upload_path'] = './assets/uploads/users';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar') ){
				$gambar = $this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Photo Users Gagal Diupload!";

			}
		}

		$data = array(

			'nama' 		=> $nama,
			'email' 	=> $email,
			'no_hp' 	=> $no_hp,
			'alamat_users' 	=> $alamat_users

		);

		$where = array('id_users' => $id_users);

		$this->users_model->update_data($where,$data,'users');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
			Data Users Berhasil di <strong>Update!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/users');
	}

	public function delete_users($id)
	{
		$where = array('id_users' => $id);
		$this->users_model->hapus_data($where,'users');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
			Data Users Berhasil di <strong>Delete!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/users');
	}


}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */