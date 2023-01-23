<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
	</div>

	<div class="card mb-3">

		<div class="alert alert-info">
			Menampilkan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
		</div>
		<?php
		$bulantahun = $this->uri->segment(4);
		$jml_data = count($update_absensi);
		if ($jml_data > 0) { ?>

			<form method="POST" action="<?php echo site_url('admin/data_pegawai/update_absensi_aksi') ?>">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<td class="text-center">No</td>
							<td class="text-center">NIK</td>
							<td class="text-center">Nama Pegawai</td>
							<td class="text-center">Jenias Kalamin</td>
							<td class="text-center">Jabatan</td>
							<td class="text-center" width="8%">Hadir</td>
							<td class="text-center" width="8%">Sakit</td>
							<td class="text-center" width="8%">Alpha</td>
							<td class="text-center" width="8%">Actions</td>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($update_absensi as $a) : ?>
							<tr>
								<input type="hidden" name="bulan" class="form-control" value="<?php echo $bulantahun ?>">
								<input type="hidden" name="nik" class="form-control" value="<?php echo $a->nik ?>">
								<input type="hidden" name="nama_pegawai" class="form-control" value="<?php echo $a->nama_pegawai ?>">
								<input type="hidden" name="jenis_kelamin" class="form-control" value="<?php echo $a->jenis_kelamin ?>">
								<input type="hidden" name="nama_jabatan" class="form-control" value="<?php echo $a->nama_jabatan ?>">
	
								<td class="text-center">
									<?php echo $no++ ?>
								</td>
								<td class="text-center"><?php echo $a->nik ?></td>
								<td class="text-center"><?php echo $a->nama_pegawai ?></td>
								<td class="text-center"><?php echo $a->jenis_kelamin ?></td>
								<td class="text-center"><?php echo $a->nama_jabatan ?></td>
								<td class="text-center">
									<input type="number" name="hadir" value="<?php echo $a->hadir ?>" class="form-control">
								</td>
								<td class="text-center">
									<input type="number" name="sakit" value="<?php echo $a->sakit ?>" class="form-control">
								</td>
								<td class="text-center">
									<input type="number" name="alpha" value="<?php echo $a->alpha ?>" class="form-control">
								</td>
								<td>
									<center>
										<a class="btn btn-sm btn-success" href="<?php echo base_url('admin/data_absensi/update_absensi_aksi/' . $a->id_kehadiran) ?>"><i class="fas fa-save"> simpan</i></i></a>
									</center>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="d-flex justify-content-end mb-3">
					<a class="btn btn-warning ml-2 mr-2" href="<?php echo site_url('admin/data_absensi') ?>">kembali</a>
				</div>
			</form>
		<?php } ?>
	</div>


</div>
<!-- /.container-fluid -->
