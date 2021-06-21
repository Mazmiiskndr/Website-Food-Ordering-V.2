<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResKategori_model extends CI_Model {

	public function get_jumlah_kategori()
	{
		$sql = "SELECT count(id_kategori) as id_kategori FROM res_kategori";
		$result = $this->db->query($sql);
		return $result->row()->id_kategori;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function update_password($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}



	public function insert_kategori($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_kategori($id)
	{
		$result = $this->db->where('id_kategori',$id)->get('res_kategori');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}




}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */