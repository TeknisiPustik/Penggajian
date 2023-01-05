<?php

class MPegawai extends CI_model{

    public function get_data() 
	{
		//tampilkan data dari "data_pegawai"
		$this->db->from("data_pegawai");
		
		// eksekusi query
		$query = $this->db->get()->result();

		//kirim hasil query ke controler data_pegawai
		return $query;
	}

	public function add_data($nik, $nama_pegawai, $username, $password, $jenis_kelamin, $jabatan, $tanggal_masuk, $status, $photo, $hak_akses){
		$data = array(
			"nik" => $nik,
			"nama_pegawai" => $nama_pegawai,
			"username" => $username,
			"password" => $password,
			"jenis_kelamin" => $$jenis_kelamin,
			"jabatan" => $jabatan,
			"tanggal_masuk" => $tanggal_masuk,
			"status" => $status,
			"photo" => $photo ,
			"hak_akses" => $hak_akses
		);

		$this->db->insert("data_pegawai", $data);
	}
}

?>