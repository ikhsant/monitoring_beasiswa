<?php
$title 	= 'Dashboard';
include "../include/header.php";
include "../include/database.php";
?>
<?php 


?>
<div class="w3-container">

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

</div>

<div class="w3-quarter">
	<div class="w3-card-4 w3-margin w3-padding w3-teal ">
		<div class="w3-xxlarge">
			<i class="fa fa-users"></i>
			<?php 
			$mahasiswa = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM mahasiswa"));
			echo $mahasiswa; 
			?>
		</div>
		Mahasiswa Beasiswa
	</div>
</div>

<div class="w3-quarter">
	<div class="w3-card-4 w3-margin w3-padding w3-green ">
		<div class="w3-xxlarge">
			<i class="fa fa-users"></i>
			<?php 
			$beasiswa_dipertahankan = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nilai_akademik >= '3' AND nilai_vtb >= '73' AND nilai_menwa >= '73' "));
			echo $beasiswa_dipertahankan; 
			?>
		</div>
		Beasiswa Di pertahankan
	</div>
</div>

<div class="w3-quarter">
	<div class="w3-card-4 w3-margin w3-padding w3-red ">
		<div class="w3-xxlarge">
			<i class="fa fa-users"></i>
			<?php 
			$beasiswa_sp = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nilai_akademik < '3' OR nilai_vtb < '44' OR nilai_menwa < '44' "));
			echo $beasiswa_sp; 
			?>

		</div>
		Beasiswa SP1
	</div>
</div>

<script type="text/javascript" src="../assets/js/jquery-3.3.1.slim.min.js"></script>

<?php
include "../include/footer.php";
?>