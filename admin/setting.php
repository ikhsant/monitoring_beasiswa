<?php 
$page = 'setting';
$title = 'Setting';
include "../include/header.php";
?>
<div class="w3-container">
<?php 
// notif pesan
if (!empty($_SESSION['pesan'])) { ?>
	<div class="w3-green w3-large w3-padding">
		<i class="fa fa-check"></i> <?php echo $_SESSION['pesan']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['pesan'] = '';
} 

// notif pesan ewrror
if (!empty($_SESSION['error'])) { ?>
	<div class="w3-green w3-large w3-padding">
		<i class="fa fa-check"></i> <?php echo $_SESSION['error']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['error'] = '';
} 
?>

<?php  
if(isset($_POST["submit"])) {
	// setting sebelum upload
	$target_dir = "../uploads/logo/";
	$target_file = $target_dir . basename($_FILES["logo"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// cek file di isi
	if(!empty($_FILES["logo"]["name"])){
		// Check file size
		if ($_FILES["logo"]["size"] > 3000000) {
			echo "File Terlalu Besar Max 3MB";
		}else{
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo "Format File Tidak di izinkan!";
			}else{
				// cek file sudah ada dan hapus file lama
				if(!empty($setting['logo'])){
					unlink('../uploads/logo/'.$setting['logo']);
				}

				// proses upload dan simpan ke db
				if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
					$nama_website	= $_POST['nama_website'];
					$alamat			= $_POST['alamat'];
					$deskripsi		= $_POST['deskripsi'];
					$theme			= $_POST['theme'];
					$logo			= $_FILES["logo"]["name"];

					// simpan ke database
					mysqli_query($conn,"UPDATE setting SET nama_website='$nama_website',alamat='$alamat',deskripsi='$deskripsi',theme='$theme',logo='$logo'");

					// redirect
					$_SESSION['pesan'] = 'Suskses merubah';
					

				} else {
					echo "Ada kesalahan dalam Upload Logo";
				}
			}
		}
	}else{
		$nama_website	= $_POST['nama_website'];
		$alamat			= $_POST['alamat'];
		$deskripsi		= $_POST['deskripsi'];
		$theme			= $_POST['theme'];

		// simpan ke database
		mysqli_query($conn,"UPDATE setting SET nama_website='$nama_website',alamat='$alamat',deskripsi='$deskripsi',theme='$theme'");

		// redirect
		$_SESSION['pesan'] = 'Suskses merubah';
	}
}
?>

<table class="w3-table w3-striped w3-border"> 
	<tr>
		<th width="25%">Logo</th>
		<td><img src="../uploads/logo/<?php echo $setting['logo']; ?>" style="height: 100px"></td>
	</tr>
	<tr>
		<th>Nama Webiste</th>
		<td><?php echo $setting['nama_website']; ?></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td><?php echo $setting['alamat']; ?></td>
	</tr>
	<tr>
		<th>Deskripsi</th>
		<td><?php echo $setting['deskripsi']; ?></td>
	</tr>
	<tr>
		<th>Theme</th>
		<td class="w3-text-theme"><?php echo $setting['theme']; ?></td>
	</tr>
</table>
<br>
<button class="w3-button w3-green"  onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-gear"></i> Ubah Setting</button>

<div id="id01" class="w3-modal">
	<div class="w3-modal-content w3-card  w3-animate-zoom">
		<header class="w3-container w3-theme"> 
			<span onclick="document.getElementById('id01').style.display='none'" 
			class="w3-button w3-display-topright">&times;</span>
			<h3>App Setting</h3>
		</header>
		<div class="w3-container">
			<form method="post" enctype="multipart/form-data">
				<p>
					<label><b>Logo</b></label>
					<input class="w3-input w3-border" type="file" name="logo">
				</p>

				<p>
					<label><b>Nama Website</b></label>
					<input class="w3-input w3-border" type="text" name="nama_website" value="<?php echo $setting['nama_website'] ?>">
				</p>
				
				<p>
					<label><b>Alamat</b></label>
					<input class="w3-input w3-border" type="text" name="alamat" value="<?php echo $setting['alamat'] ?>">
				</p>
				<p>
					<label><b>Deskripsi</b></label>
					<input class="w3-input w3-border" type="text" name="deskripsi" value="<?php echo $setting['deskripsi'] ?>">
				</p>
				<p>
					<label><b>Theme</b></label>
					<select class="w3-select w3-border" type="text" name="theme">
						<option value="green" <?php if($setting['theme'] == 'green'){echo "selected";} ?>>GREEN</option>
						<option value="red" <?php if($setting['theme'] == 'red'){echo "selected";} ?>>RED</option>
						<option value="orange" <?php if($setting['theme'] == 'orange'){echo "selected";} ?>>ORANGE</option>
						<option value="brown" <?php if($setting['theme'] == 'brown'){echo "selected";} ?>>BROWN</option>
					</select>
				</p>
				<button class="w3-button w3-green" type="submit" name="submit"><i class="fa fa-save"></i> Simpan</button>
			</form>
		</div>

		<footer class="w3-container w3-light-grey w3-padding">

		</footer>
	</div>
</div>

</div>
<?php 
include "../include/footer.php";
?>