<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<title>Tamu</title>
</head>
<body>
	<center>
		<h1>Data Bengkel </h1>
		<h3>Data tamu baru</h3><hr>
	</center>

		
<div class="container">
<div class="row">
<div class="col-sm-5"><strong><h5>Hai selamat datang, anda login sebagai <?php echo $username; ?></strong></h5></div>
<div class="col-sm-7">
<a class="btn btn-danger" href="<?php echo site_url('tamu/c_tamu/logout'); ?>" >Logout</a>
  </div><br>
<br>
<div class="col-sm-5">
<a href="<?php echo site_url ('tamu/c_tamu/tambah'); ?>" class="btn btn-primary">Tambah Data </a> 
</div>

<br>

<div class="container">   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Tamu</th>
        <th>Nama Tamu</th>
        <th>Email</th>
        <th>pesan</th>
        <th>User ID</th>
        <th colspan="2">Aksi</th>

      </tr>
    </thead>
    <tbody>

    <?php
    $no=0;
foreach ($tamu as $u) {
  # code...


    ?>
      <tr>

       <td><?php echo $u->kd_bengkel ?></td>
        <td class="center"><?php echo $u->nama_bengkel ?></td>
        <td class="center"><?php echo $u->email_bengkel ?></td>
        <td class="center"><?php echo $u->no_telp ?></td>
       <td class="center"><?php echo $u->nama_pemilik ?></td>
        <td class="center"><?php echo $u->alamat_bengkel ?></td>
      
        <td><?php echo anchor('tamu/c_tamu/edit/'.$u->kd_bengkel,'edit'); ?></td>
 </tr>
<?php } ?>
    </tbody>
  </table>
</div>





</div>
</div>

</body>
</html>