<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];

	include '../include/header.php';
	include "../include/database.php";

	switch ($page) {

		case 'dashboard':
		include 'dashboard.php';
		break;

		case 'mahasiswa':
		include 'mahasiswa.php';
		break;

		case 'mhs':
		include 'mhs.php';
		break;

		case 'setting':
		include 'setting.php';
		break;

		case 'nilai_akademik':
		include 'nilai_akademik.php';
		break;

		case 'nilai_organisasi_menwa':
		include 'nilai_organisasi_menwa.php';
		break;

		case 'nilai_organisasi_vtb':
		include 'nilai_organisasi_vtb.php';
		break;

		case 'user':
		include 'user.php';
		break;

		case 'logout':
		include 'logout.php';
		break;

		default:
		include 'dashboard.php';
		break;
	}

	include '../include/footer.php';

}else{
	echo "Tidak Di temukan";
}

?>
