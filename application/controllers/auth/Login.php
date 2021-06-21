<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email')){
			redirect('');
		}
		$data['title'] = 'Halaman Login';
		$this->load->view('templates_home/header',$data);
		$this->load->view('auth/login');
		$this->load->view('templates_home/footer');
	}

	public function proses_login()
	{
		$this->_rules();
		$data['title'] = 'Halaman Login';

		if( $this->form_validation->run() == FALSE ){
			$this->load->view('templates_auth/header',$data);
			$this->load->view('auth/login');
			$this->load->view('templates_auth/footer');
		}else{
			$email			= $this->input->post('email');
			$password		= MD5($this->input->post('password'));

			$cek = $this->login_model->cek_login($email,$password);

			if( $cek == FALSE ){

				$this->session->set_flashdata('pesan','
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
  					Username atau Password <strong>Salah!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
				redirect('auth/login');
			}else{
				$this->session->set_userdata('id_users',$cek->id_users);
				$this->session->set_userdata('email',$cek->email);
				$this->session->set_userdata('nama',$cek->nama);
				$this->session->set_userdata('no_hp',$cek->no_hp);
				$this->session->set_userdata('alamat_users',$cek->alamat_users);
				$this->session->set_userdata('gambar',$cek->gambar);
				$this->session->set_userdata('role_id',$cek->role_id);

				switch ($cek->role_id) {
					case 1 : 
						redirect('admin/dashboard');
						break;

					case 2 : 
						redirect('dashboard');
						break;
					
					default:
						break;
				}


			}


		}

		
	}


	public function _rules()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}

	public function ganti_password()
	{
		$data['title'] = "Ganti Password";

		$this->load->view('templates_admin/header',$data);
		$this->load->view('change_password');
		$this->load->view('templates_admin/footer');
	}

	public function ganti_password_aksi()
	{
		$pass_baru 	= $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru','New Password','required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass','Confirm Password','required');

		if( $this->form_validation->run() != false ){
			$id_customer			= $this->input->post('id_customer');
			$data = array('password' => md5($pass_baru));
			$id = array('username' => $this->session->userdata('username'));

			$this->rental_model->update_password($id,$data,'customer');
			$this->session->set_flashdata('pesan','
				<div style="color: green;" class="alert alert-success alert-dismissible fade show" role="alert">
  					Password Berhasil <strong>Diupdate!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
				redirect('auth/login');
		}else{
			$this->load->view('templates_admin/header',$data);
			$this->load->view('change_password');
			$this->load->view('templates_admin/footer');
			

		} 



	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */