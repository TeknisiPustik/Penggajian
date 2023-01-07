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
			
	}
}
