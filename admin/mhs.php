<?php 
session_start();
include '../include/database.php';
include '../include/function.php';
$setting = mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM setting LIMIT 1'));
$nim = $_SESSION['nim'];
$mhs = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim ='$nim'"));

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if(isset($title)){echo $title.' - '; }?><?php echo $setting['nama_website']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../logo.png">
  <link rel="stylesheet" href="../assets/css/w3.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/<?php echo $style ?>">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.css">
</head>
<body>

	

	<div  style="margin: auto;max-width: 600px; margin-top: 35px">

		<?php  
// notif pesan
	if (!empty($_SESSION['pesan'])) { ?>
		<div class="w3-green w3-large w3-padding">
			<h1><i class="fa fa-check"></i> <?php echo $_SESSION['pesan']; ?></h1>
		</div>
		<br>
		<?php 
		$_SESSION['pesan'] = '';
	}
	?>

		<div class="w3-padding w3-green w3-large">
			DATA MAHASISWA
		</div>
		<div class="w3-border">
			<table class="w3-table w3-striped">
				<tr>
					<th>NIM</th>
					<td><?php echo $mhs['nim'] ?></td>
				</tr>
				<tr>
					<th>Nama</th>
					<td><?php echo $mhs['nama'] ?></td>
				</tr>
				<tr>
					<th>Nilai Akademik</th>
					<td><?php echo $mhs['nilai_akademik'] ?></td>
				</tr>
				<tr>
					<th>Nilai VTB</th>
					<td><?php echo keNilaiHuruf($mhs['nilai_vtb']) ?></td>
				</tr>
				<tr>
					<th>Nilai MENWA</th>
					<td><?php echo keNilaiHuruf($mhs['nilai_menwa']) ?></td>
				</tr>
				<tr>
					<th>STATUS</th>
					<td><?php echo cekSP($mhs['nim']) ?></td>
				</tr>
			</table>
		</div>
		<div class="w3-padding w3-light-grey w3-border">
			<a href="logout.php" onclick="return confirm('Yakin Keluar?')" class="w3-button w3-red"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
	</div>
</body>
</html>