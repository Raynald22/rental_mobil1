<?php

class Data_mobil extends CI_Controller
{
	public function index()
	{
		$params['title'] = 'Data Mobil';
		$data['mobil'] = $this->rental_model->get_data('mobil')->result();
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('template_admin/header', $params);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_mobil', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_mobil()
	{
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_tambah_mobil', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_mobil_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_mobil();
		} else {
			$kode_type     = $this->input->post('kode_type');
			$merk          = $this->input->post('merk');
			$no_plat       = $this->input->post('no_plat');
			$warna         = $this->input->post('warna');
			$tahun         = $this->input->post('tahun');
			$harga        = $this->input->post('harga');
			$denda        = $this->input->post('denda');
			$ac        = $this->input->post('ac');
			$supir        = $this->input->post('supir');
			$mp3_player        = $this->input->post('mp3_player');
			$central_lock        = $this->input->post('central_lock');
			$status        = $this->input->post('status');
			$gambar        = $_FILES['gambar']['name'];
			if ($gambar = '') {
			} else {
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo "Gambar Mobil Gagal Diupload!";
				} else {
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'kode_type'    => $kode_type,
				'merk'    => $merk,
				'no_plat'    => $no_plat,
				'tahun'    => $tahun,
				'warna'    => $warna,
				'harga'    => $harga,
				'denda'    => $denda,
				'ac'    => $ac,
				'supir'    => $supir,
				'mp3_player'    => $mp3_player,
				'central_lock'    => $central_lock,
				'status'    => $status,
				'gambar'    => $gambar
			);

			$this->rental_model->insert_data($data, 'mobil');
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambah!');
			redirect('admin/data_mobil');
		}
	}

	public function update_mobil($id)
	{
		$where = array('id_mobil' => $id);
		$data['mobil'] = $this->db->query("SELECT * FROM mobil mb,type tp WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result();
		$data['type'] = $this->rental_model->get_data('type')->result();

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_update_mobil', $data);
		$this->load->view('template_admin/footer');
	}

	public function update_mobil_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id_mobil');
			$this->update_mobil($id);
		} else {
			$id            = $this->input->post('id_mobil');
			$kode_type     = $this->input->post('kode_type');
			$merk          = $this->input->post('merk');
			$no_plat       = $this->input->post('no_plat');
			$warna         = $this->input->post('warna');
			$tahun         = $this->input->post('tahun');
			$harga        = $this->input->post('harga');
			$denda        = $this->input->post('denda');
			$ac        = $this->input->post('ac');
			$supir        = $this->input->post('supir');
			$mp3_player        = $this->input->post('mp3_player');
			$central_lock        = $this->input->post('central_lock');
			$status        = $this->input->post('status');
			$gambar        = $_FILES['gambar']['name'];
			if ($gambar) {
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'kode_type'    => $kode_type,
				'merk'    => $merk,
				'no_plat'    => $no_plat,
				'tahun'    => $tahun,
				'warna'    => $warna,
				'harga'    => $harga,
				'denda'    => $denda,
				'ac'    => $ac,
				'supir'    => $supir,
				'mp3_player'    => $mp3_player,
				'central_lock'    => $central_lock,
				'status'    => $status
			);

			$where = array(
				'id_mobil' => $id
			);

			$this->rental_model->update_data('mobil', $data, $where);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate!');
			redirect('admin/data_mobil');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
		$this->form_validation->set_rules('merk', 'Merk', 'required');
		$this->form_validation->set_rules('no_plat', 'No Plat', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('denda', 'Denda', 'required');
		$this->form_validation->set_rules('ac', 'AC', 'required');
		$this->form_validation->set_rules('supir', 'Supir', 'required');
		$this->form_validation->set_rules('mp3_player', 'MP3 Player', 'required');
		$this->form_validation->set_rules('central_lock', 'Central Lock', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	}

	public function detail_mobil($id)
	{
		$data['detail'] = $this->rental_model->ambil_data_mobil($id);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/detail_mobil', $data);
		$this->load->view('template_admin/footer');
	}

	public function delete_mobil($id)
	{
		$where = array('id_mobil' => $id);
		$this->rental_model->delete_data($where, 'mobil');
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
		redirect('admin/data_mobil');
	}
}
