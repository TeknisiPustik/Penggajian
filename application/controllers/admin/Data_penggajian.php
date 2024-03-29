<?php 

class Data_penggajian extends CI_Controller{
    public  function index()
    {
        $data['title'] = "Data Gaji Pegawai";
        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }
        $data['potongan'] = $this->ModelPenggajian->get_data('potongan_gaji')->result();

        $data['gaji'] = $this->db->query("SELECT data_pegawai.nik,data_pegawai.nama_pegawai,data_pegawai.jenis_kelamin,data_jabatan.nama_jabatan,data_jabatan.gaji_pokok,data_jabatan.tj_transport,data_jabatan.uang_makan,data_kehadiran.alpha FROM data_pegawai INNER JOIN data_kehadiran on data_kehadiran.nik=data_pegawai.nik
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan
        WHERE data_kehadiran.bulan='$bulantahun'
        ORDER BY data_pegawai.nama_pegawai ASC")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/gaji/dataGaji', $data);
        $this->load->view('templates_admin/footer');
    }
}

?>