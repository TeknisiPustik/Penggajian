<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>
    <?php echo $this->session->flashdata('pesan')?>
</div>         


<div class="container-fluid">
  <div class="card shadow mb-4">
   <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_pegawai/saveData')?>">
            <div class="form-group row mb-5 mt-3">
                <label for="inputNik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="Nik" class="form-control" id="inputNik" placeholder="Nik">
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="nama" class="form-control" id="inputnama" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="Username" class="form-control" id="inputUsername" placeholder="Username">
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="Password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputJenis Kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
					    <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputJabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>-- Pilih Jabatan --</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputTanggalMasuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputTanggalMasuk" placeholder="Set Tanggal Masuk">
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>-- Pilih Status Karyawan --</option>
                        <option value="Karyawan Tetap">Karyawan Tetap</option>
					    <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputHakAkses" class="col-sm-2 col-form-label">Hak Akses</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>-- Pilih Hak Akses --</option>
                        <option value="1">Admin</option>
					    <option value="2">Pegawai</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="inputPhoto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                <input type="file" name="photo" placeholder="Masukan Foto">
                </div>
            </div>

            <div class="form-group row mb-5">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                    <a class="btn btn-warning" href="<?php echo site_url('admin/data_pegawai') ?>">kembali</a>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>