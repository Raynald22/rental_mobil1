<?php

class Rental_model extends CI_Model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_data_mobil($id)
	{
		$hasil = $this->db->where('id_mobil', $id)->get('mobil');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db
			->where('username', $username)
			->where('password', md5($password))
			->limit(1)
			->get('customer');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function update_password($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('transaksi', array('
        id_rental' => $id));
		return $query->row_array();
	}

	public function get_where($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function count_all_products()
	{
		return $this->db->get('mobil')->num_rows();
	}

	public function count_all_user()
	{
		return $this->db->get('customer')->num_rows();
	}

	public function count_all_transaksi()
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer")->result();
	}

	public function count_all_laporan()
	{
		return $this->db->get('customer')->num_rows();
	}
}
