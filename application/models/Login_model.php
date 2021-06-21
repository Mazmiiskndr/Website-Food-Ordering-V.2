<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function get_jumlah_users()
	{
		$sql = "SELECT count(id_users) as id_users FROM users";
		$result = $this->db->query($sql);
		return $result->row()->id_users;
	}


	public function cek_login()
	{
		$email = set_value('email');
		$password = set_value('password');

		$result = $this->db
						->where('email',$email)
						->where('password',md5($password))
						->limit(1)
						->get('users');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}

	public function cek_email()
	{
		$email = set_value('email');

		$result = $this->db
						->where('email',$email)
						->limit(1)
						->get('users');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function getLoginData($user,$pass)
	{
		$u = $user;
		$p = MD5($pass);
		$query_cekLogin = $this->db->get_where('users',array('email' => $u,'password' => $p));
		if(count($query_cekLogin->result()) > 0){
			foreach($query_cekLogin->result() as $ck){
				foreach($query_cekLogin->result() as $ck){
					$sess_data['logged_in'] = TRUE;
					$sess_data['email'] = $ck->email;
					$sess_data['password'] = $ck->password;
					$sess_data['role_id'] = $ck->role_id;
					$this->session->set_userdata($sess_data);
				}
				redirect('admin/dashboard');
			}
		}else{
			$this->session->set_flashdata('pesan','
					<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
					  email dan Password <strong>Salah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('auth/login');
		}
	}




}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */