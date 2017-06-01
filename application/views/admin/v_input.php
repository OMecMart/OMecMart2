<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<title>Tamu</title>
</head>
<body>
	<center>
		<h1>Data Tamu</h1>
		<h3>Tambah data tamu baru</h3><hr>
	</center>

		
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
   <form role="form" class="form-horizontal" action="<?php echo base_url().'index.php/admin/c_admin/tambah_aksi'; ?>" method="post">
  <table style="margin:20px auto;">
			<tr>
				<td>Nama Bengkel</td>
				<td><input required type="text" name="nama_bengkel" placeholder="Masukkan Nama Bengkel"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Email Bengkel</td>
				<td><input required type="text" name="email_bengkel" placeholder="Masukkan Email Bengkel"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			<tr>
				<td>No Telp.</td>
				<td><input required type="text" name="no_telp" placeholder="Masukkan Nomor Telepon"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Nama Pemilik</td>
				<td><input required type="text" name="nama_pemilik" placeholder="Masukkan Nama Pemilik"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Alamat Bengkel</td>
				<td><input required type="text" name="alamat_bengkel" placeholder="Masukkan Alamat Bengkel"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
		</table>
    <input type="hidden" name="uid" value="<?php echo $this->session->userdata('uid') ?>">
<input type="submit" class="btn btn-primary" value="Tambah">
  </form>
</div>
</div>
</div>
</body>
</html>