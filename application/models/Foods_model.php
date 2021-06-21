<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foods_model extends CI_Model {

	public function get_jumlah_foods()
	{
		$sql = "SELECT count(id_foods) as id_foods FROM foods";
		$result = $this->db->query($sql);
		return $result->row()->id_foods;
	}

	public function find($id)
	{
		$result = $this->db->where('id_foods',$id)
							->limit(1)
							->get('foods');
		if( $result->num_rows() > 0 ){
			return $result->row();
		}else{
			return array();
		}

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



	public function insert_foods($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_foods($id)
	{
		$result = $this->db->where('id_foods',$id)->get('foods');
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


	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('foods');
		$this->db->join('restoran','restoran.id_restoran = foods.id_restoran');
		$this->db->like('nama_foods',$keyword);
		$this->db->or_like('harga',$keyword);
		$this->db->or_like('nama_restoran',$keyword);
		$this->db->or_like('deskripsi',$keyword);
		return $this->db->get()->result();
	}


}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */