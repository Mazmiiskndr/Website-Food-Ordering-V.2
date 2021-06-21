<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Shop | Food Orderings';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/contact');
		$this->load->view('templates_home/footer');
	}


	public function contact_aksi()
	{
		$nama 		= htmlspecialchars($this->input->post('nama'));
		$email 		= htmlspecialchars($this->input->post('email'));
		$subject 	= htmlspecialchars($this->input->post('subject'));
		$deskripsi 	= htmlspecialchars($this->input->post('deskripsi'));

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'subject' => $subject,
			'deskripsi' => $deskripsi
		);
		$this->foods_model->insert_foods($data,'contact');
		$this->session->set_flashdata('pesan','
			<div style="color: red;" class="alert alert-success alert-dismissible fade show text-dark" role="alert">
                    Terimakasih telah menghubungi <strong>Kami!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
			');
		redirect('home/contact');
	}

}

/* End of file Shop.php */
/* Location: ./application/controllers/home/Shop.php */