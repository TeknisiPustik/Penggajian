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

		$jml_data = count($update_absensi);
		if ($jml_data > 0) { ?>

			<form method="POST">
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
						</tr>
					</thead>
					<tbody>

					</tbody>
					<?php $no = 1;
					foreach ($update_absensi as $a) : ?>
						<tr>
							<td class="text-center"><?php echo $no++ ?></td>
							<td class="text-center"><?php echo $a->nik ?></td>
							<td class="text-center"><?php echo $a->nama_pegawai ?></td>
							<td class="text-center"><?php echo $a->jenis_kelamin ?></td>
							<td class="text-center"><?php echo $a->nama_jabatan ?></td>
							<td class="text-center">
								<input type="number" name="" value="<?php echo $a->hadir ?>" class="form-control">
							</td>
							<td class="text-center">
								<input type="number" name="" id="" value="<?php echo $a->sakit ?>" class="form-control">
							</td>
							<td class="text-center">
								<input type="number" name="" id="" value="<?php echo $a->alpha ?>" class="form-control">
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<div class="d-flex justify-content-end mb-3">
					<button class="btn btn-success" type="submit" name="submit" value="submit">Simpan</button>
					<a class="btn btn-warning ml-2 mr-2" href="<?php echo site_url('admin/data_absensi') ?>">kembali</a>
				</div>
			</form>
		<?php } ?>
	</div>


</div>
<!-- /.container-fluid -->
