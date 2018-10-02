<?php
$title 	= 'Data Nilai Organisasi VTB';
include "../include/header.php";
include "../include/database.php";
?>

<div class="w3-padding w3-green w3-large w3-margin">
	<?php  
	echo 'Tahun Ajaran: '.$_SESSION['tahun_ajaran'];
	?>
</div>

<div class="w3-container">

	<table class="w3-table w3-striped w3-border">
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>NILAI</th>
			<th>Aksi</th>
		</tr>
		<?php  
		$mhs = mysqli_query($conn,"SELECT * FROM mahasiswa");
		foreach($mhs as $mhs){
			$id = $mhs['mahasiswa_id'];
			?>
			<tr>
				<td><?php echo $mhs['nim'] ?></td>
				<td><?php echo $mhs['nama'] ?></td>
				<td><?php echo $mhs['nilai_vtb'] ?></td>
				<td>
					<button class="w3-button w3-green"  onclick="document.getElementById('id01<?php echo $id ?>').style.display='block'"><i class="fa fa-gear"></i> BERI NILAI</button>
				</td>
			</tr>


			<div id="id01<?php echo $id ?>" class="w3-modal">
				<div class="w3-modal-content w3-animate-top w3-card-4">
					<header class="w3-container w3-teal"> 
						<span onclick="document.getElementById('id01<?php echo $id ?>').style.display='none'" 
							class="w3-button w3-display-topright">&times;</span>
							<h3>Beri Nilai</h3>
						</header>
						<form method="post">
							<div class="w3-container">
								<div class="w3-half w3-padding">
									<label><b>Inisiatif</b></label>
									<input type="number" class="w3-select" name="inisiatif" required>
								</div>
								<div class="w3-half w3-padding">
									<label><b>Disiplin</b></label>
									<input type="number" class="w3-select" name="disiplin" required>
								</div>
								<div class="w3-half w3-padding">
									<label><b>Tanggung Jawab</b></label>
									<input type="number" class="w3-select" name="tanggung_jawab" required>
								</div>
								<div class="w3-half w3-padding">
									<label><b>Kerja Sama</b></label>
									<input type="number" class="w3-select" name="kerja_sama" required>
								</div>
								<div class="w3-half w3-padding">
									<label><b>Penyesuain Diri</b></label>
<<<<<<< HEAD
									<select class="w3-select" name="penyesuaian" required>
										<option></option>
										<option value="100">A</option>
										<option value="80">B</option>
										<option value="70">C</option>
										<option value="60">D</option>
										<option value="40">E</option>
									</select>
<<<<<<< HEAD
								</div> -->
								<div class="w3-padding">
									<label><b>NILAI</b></label>
									<input type="number" name="nilai" class="w3-input">
=======
									<input type="number" class="w3-select" name="penyesuaian" required>
>>>>>>> 8d1d3000fa1a15dd80f936e00015c657a1ba4c8e
=======
>>>>>>> parent of fd5730c... up1
								</div>
							</div>
							<footer class="w3-padding w3-light-grey">
								<input type="hidden" name="id" value="<?php echo $id ?>">
								<button class="w3-button w3-green" name="simpan"><i class="fa fa-save"></i> Simpan</button>
							</footer>
						</form>
					</div>
				</div>
			<?php } ?>
		</table>
	</div>

	<?php  
	if (isset($_POST['simpan'])) {
	// menyimpan nilai
		$inisiatif = $_POST['inisiatif'];
		$disiplin = $_POST['disiplin'];
		$tanggung_jawab = $_POST['tanggung_jawab'];
		$kerja_sama = $_POST['kerja_sama'];
		$penyesuaian = $_POST['penyesuaian'];
		$id = $_POST['id'];

	// menjumlahkan nilai
<<<<<<< HEAD
<<<<<<< HEAD
		// $nilai = ($inisiatif + $disiplin + $tanggung_jawab + $kerja_sama + $penyesuaian) / 5;
=======
		$nilai = ($inisiatif + $disiplin + $tanggung_jawab + $kerja_sama + $penyesuaian) / 5;
>>>>>>> parent of fd5730c... up1

	// memasukan ke db
		mysqli_query($conn, "UPDATE mahasiswa SET nilai_vtb = '$nilai' WHERE mahasiswa_id = '$id' ");
=======
		$nilai = ($inisiatif + $disiplin + $tanggung_jawab + $kerja_sama + $penyesuaian) / 5;
		// menentukan nilai huruf
		if ($nilai >= 85) {
			$nilai_huruf = 'A';
		}elseif ($nilai >= 70 ) {
			$nilai_huruf = 'B';
		}elseif ($nilai >= 65) {
			$nilai_huruf = 'C';
		}elseif ($nilai >= 50) {
			$nilai_huruf = 'D';
		}else{
			$nilai_huruf = 'E';
		}

	// memasukan ke db
		mysqli_query($conn, "UPDATE mahasiswa SET nilai_vtb = '$nilai_huruf' WHERE mahasiswa_id = '$id' ");
>>>>>>> 8d1d3000fa1a15dd80f936e00015c657a1ba4c8e

	// redicet
		echo '<meta http-equiv="refresh" content="0"; URL="stok.php" />';

	}
	?>

	<?php  
	include '../include/footer.php';
	?>