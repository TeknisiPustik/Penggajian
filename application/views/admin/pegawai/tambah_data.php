<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
	</div>
	<?php echo $this->session->flashdata('pesan') ?>
</div>


<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-body">
			<form method="POST" action="<?php echo site_url('admin/data_pegawai/tambah_data_aksi') ?>" enctype="multipart/form-data">
				<div class="form-group row mb-5 mt-3">
					<label for="nik" class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="nik" placeholder="Nik" name="nik">
						<small id="nik" class="form-text text-muted"><?php echo form_error('nik', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama_pegawai" placeholder="Nama" name="nama_pegawai">
						<small id="nama_pegawai" class="form-text text-muted"><?php echo form_error('nama_pegawai', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="username" class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" placeholder="Username" name="username">
						<small id="username" class="form-text text-muted"><?php echo form_error('username', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="password" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="Password" class="form-control" id="password" placeholder="Password" name="password">
						<small id="password" class="form-text text-muted"><?php echo form_error('password', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<select class="form-control" name="jenis_kelamin">
							<option value="">-- Pilih Jenis Kelamin --</option>
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<small id="jenis_kelamin" class="form-text text-muted"><?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
					<div class="col-sm-10">
						<select class="form-control" name="jabatan">
							<option value="">-- Pilih Jabatan --</option>
							<?php foreach ($jabatan as $j) : ?>
								<option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
							<?php endforeach; ?>
						</select>
						<small id="jabatan" class="form-text text-muted"><?php echo form_error('jabatan', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="tanggal_masuk" placeholder="Set Tanggal Masuk" name="tanggal_masuk">
						<small id="tanggal_masuk" class="form-text text-muted"><?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="status" class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-10">
						<select class="form-control" name="status">
							<option>-- Pilih Status Karyawan --</option>
							<option value="Karyawan Tetap">Karyawan Tetap</option>
							<option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
						</select>
						<small id="status" class="form-text text-muted"><?php echo form_error('status', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="hak_akses" class="col-sm-2 col-form-label">Hak Akses</label>
					<div class="col-sm-10">
						<select class="form-control" name="hak_akses">
							<option>-- Pilih Hak Akses --</option>
							<option value="1">Admin</option>
							<option value="2">Pegawai</option>
						</select>
						<small id="hak_akses" class="form-text text-muted"><?php echo form_error('hak_akses', '<div class="text-small text-danger"> </div>') ?></small>
					</div>
				</div>
				<div class="form-group row mb-5">
					<label for="photo" class="col-sm-2 col-form-label">Foto</label>
					<div class="col-sm-10">
						<input type="file" name="photo">
					</div>
				</div>

				<div class="form-group row mb-5">
					<label for="" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						<button id="simpan" class="btn btn-primary">Simpan</button>
						<button type="reset" class="btn btn-danger">Batal</button>
						<a class="btn btn-warning" href="<?php echo site_url('admin/data_pegawai') ?>">kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
