<?php

class Data_pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// panggil model "
		$this->load->model('MPegawai', 'pegawai', TRUE);
	}

	public function index()
	{
		$data = array(
			"pegawai" => $this->pegawai->get_data(),
			"title" => "Data pegawai"
		);
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pegawai/data_pegawai', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahData()
	{
		$data['title'] = "Tambah Data Pegawai";

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pegawai/tambah_data', $data);
		$this->load->view('templates_admin/footer');
	}

	public function saveData()
	{
			$nik			= $this->input->post('nik');
			$nama_pegawai	= $this->input->post('nama_pegawai');
			$username		= $this->input->post('username');
			$password		= md5($this->input->post('password'));
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$jabatan		= $this->input->post('jabatan');
			$tanggal_masuk	= $this->input->post('tanggal_masuk');
			$status			= $this->input->post('status');
			$hak_akses		= $this->input->post('hak_akses');
			// $photo			= $_FILES['photo']['name'];


			$data = array(
				'nik' 			=> $nik,
				'nama_pegawai' 	=> $nama_pegawai,
				'username' 		=> $username,
				'password' 		=> $password,
				'jenis_kelamin' => $jenis_kelamin,
				'jabatan' 		=> $jabatan,
				'tanggal_masuk' => $tanggal_masuk,
				'status' 		=> $status,
				'hak_akses' 	=> $hak_akses,
				// 'photo' 		=> $photo,
			);

			$this->pegawai->add_data($data, 'data_pegawai');
	}
}
