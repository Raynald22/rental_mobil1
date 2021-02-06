<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$params['title'] = 'Dashboard';
		$overview['total_mobil'] = $this->rental_model->count_all_products();
		$overview['total_user'] = $this->rental_model->count_all_user();
		$overview['total_transaksi'] = $this->db->query("SELECT * FROM transaksi tr,mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer")->num_rows();
		$overview['total_laporan'] = $this->db->query("SELECT * FROM transaksi tr,mobil mb,customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer")->num_rows();

		$this->load->view('template_admin/header', $params);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard', $overview);
		$this->load->view('template_admin/footer');
	}
}
