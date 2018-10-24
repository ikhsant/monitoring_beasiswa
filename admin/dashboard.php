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

<div class="w3-row">
	<div class="w3-quarter">
		<div class="w3-card-4 w3-margin w3-padding w3-teal ">
			<div class="w3-xxlarge">
				<i class="fa fa-users"></i>
				<?php 
				$mahasiswa = mysqli_query($conn,"SELECT * FROM mahasiswa");
				echo mysqli_num_rows($mahasiswa); 
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
				$beasiswa_dipertahankan = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nilai_akademik >= '3' AND nilai_vtb >= '45' AND nilai_menwa >= '45' ");
				echo mysqli_num_rows($beasiswa_dipertahankan); 
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
				$beasiswa_sp = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nilai_akademik < '3' OR nilai_vtb < '45' OR nilai_menwa < '45' ");
				echo mysqli_num_rows($beasiswa_sp); 
				?>

			</div>
			Beasiswa SP1
		</div>
	</div>
</div>

<div class="w3-row">
	<div class="w3-col m6">
		<div class="w3-container w3-margin-bottom">
			<div class="w3-card">
				<div class="w3-padding w3-green">
					Status AMAN
				</div>
				<table class="w3-table w3-table-border w3-table-striped">
					<tr class="w3-pale-green">
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Semester</th>
					</tr>
					<?php 
					foreach($beasiswa_dipertahankan as $beasiswa_dipertahankan){ 
						?>
						<tr>
							<td><?php echo $beasiswa_dipertahankan['nama'] ?></td>
							<td><?php echo $beasiswa_dipertahankan['program_studi'] ?></td>
							<td><?php echo $beasiswa_dipertahankan['angkatan'] ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

	<div class="w3-col m6">
		<div class="w3-container">
			<div class="w3-card">
				<div class="w3-padding w3-red">
					Status TIDAK AMAN
				</div>
				<table class="w3-table w3-table-border w3-table-striped">
					<tr class="w3-pale-red">
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Semester</th>
					</tr>
					<?php 
					foreach($beasiswa_sp as $beasiswa_sp){ 
						?>
						<tr>
							<td><?php echo $beasiswa_sp['nama'] ?></td>
							<td><?php echo $beasiswa_sp['program_studi'] ?></td>
							<td><?php echo $beasiswa_sp['angkatan'] ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="../assets/js/jquery-3.3.1.slim.min.js"></script>