<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<title>Admin</title>
</head>
<body>
	<center>
		<h1>Data Bengkel</h1>
		<h3>Edit Data</h3>
	</center>




	<?php foreach($tamu as $u) { ?>
	
		<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
   <form action="<?php echo base_url(). 'index.php/tamu/c_tamu/edit_aksi'; ?>" method="post">
    <table style="margin:20px auto;">
			<tr>
				<td>Nama Bengkel</td>
				<td><input type="text" class="form-control input-sm" name="nama_bengkel" value="<?php echo $u->nama_bengkel ?> "></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Email Bengkel</td>
				<td><input type="text" class="form-control input-sm" name="email_bengkel" value="<?php echo $u->email_bengkel ?> "></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
		
			<tr>
				<td>No Telp.</td>
				<td><input type="text" class="form-control input-sm" name="no_telp" value="<?php echo $u->no_telp ?> ">	</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Nama Pemilik</td>
				<td><input type="text" class="form-control input-sm" name="nama_pemilik" value="<?php echo $u->nama_pemilik ?> "></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Alamat Bengkel</td>
				<td><input type="text" class="form-control input-sm" name="alamat_bengkel" value="<?php echo $u->alamat_bengkel ?> "></td>
			</tr>
			<tr>
			<td><input type="hidden" name="uid" value="<?php echo $u->kd_bengkel ?>"></input></td>
			<td>&nbsp;</td>
			</tr>
			
		</table>
	
<input type="submit" class="btn btn-primary" value="Edit">
  </form>
</div>
</div>
</div>
	<?php } ?>
</body>
</html>