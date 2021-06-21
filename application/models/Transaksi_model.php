<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function get_jumlah_transaksi()
	{
		$sql = "SELECT count(id_transaksi) as id_transaksi FROM transaksi";
		$result = $this->db->query($sql);
		return $result->row()->id_transaksi;
	}
	public function get_jumlah_status()
	{
		$sql = "SELECT count(status) as status FROM transaksi";
		$result = $this->db->query($sql);
		return $result->row()->status;
	}

	public function pendapatan()
	{
		$sql = "SELECT sum(total) as total FROM transaksi";
		$result = $this->db->query($sql);
		return $result->row()->total;
	}

	public function insertOrder($orderData) {
        $this->db->insert_batch('transaksi', $orderData);
        return $this->db->insert_id();
    }

	public function tampil_data($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('users','users.id_users = transaksi.id_users');

		return $this->db->get();
	}
	public function detail_data2($where)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('users','users.id_users = transaksi.id_users');
		$this->db->join('rental','rental.id_rental = transaksi.id_rental');
		$this->db->join('mobil','mobil.id_mobil = transaksi.id_mobil');
		$this->db->where($where);
		$query =  $this->db->get();

		return $query->result();
	}


	public function insert_transaksi($data,$table)
	{
		$this->db->insert($table,$data);
	} 

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function update_data2($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}

	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('transaksi',array('id_transaksi' => $id));
		return $query->row_array();
	}

	public function detail_data($id)
	{
		$this->db->where('id_transaksi', $id)->get('transaksi');
	}



	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_id_transaksi($id)
	{
		$result = $this->db->where('id_transaksi',$id)->get('transaksi');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	// public function ambil_id_transaksi($id)
	// {
	// 	$this->db->select('transaksi.id_transaksi,nama_transaksi');
	// 	$this->db->from('transaksi');
	// 	$this->db->join('type', 'transaksi.id_transaksi = type.id_type');
	// 	$result =$this->db->where('transaksi.id_transaksi', $id);
	// 	if($result->num_rows() > 0){
	// 		return $result->result();
	// 	}else{
	// 		return false;
	// 	}
	// 	return $this->db->get()->result();
	// }




}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */