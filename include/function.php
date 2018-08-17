<?php

function sisa_pembayaran($postdata, $primary, $xcrud){
    $postdata->set('sisa_pembayaran', $postdata->get('pembayaran') - 3000000 );
}

function keNilaiHuruf($nilai)
{
	if ($nilai > 84) {
		$nilai = 'A';
	}elseif($nilai > 72){
		$nilai = 'B';
	}elseif($nilai > 54){
		$nilai = 'C';
	}elseif($nilai > 44){
		$nilai = 'D';
	}else{
		$nilai = 'E';
	}

	return $nilai;
}

function cekSP($nim)
{
	include 'database.php';

	$mhs = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim = '$nim' "));
	if ($mhs['nilai_akademik'] >= 3 AND $mhs['nilai_menwa'] > 44 AND $mhs['nilai_vtb'] > 44 ) {
		return "lulus";
	}else{
		return "SP1";
	}
}