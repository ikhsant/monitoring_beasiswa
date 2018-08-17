<?php
$title 	= 'Data Nilai Akademik';
include "../include/header.php";
include "../include/database.php";
?>

<div class="w3-padding w3-green w3-large w3-margin">
	<?php  
	echo 'Tahun Ajaran: '.$_SESSION['tahun_ajaran'];
	?>
</div>

<div class="w3-container">
<?php
// set tahun ajaran
$tahun_ajaran = $_SESSION['tahun_ajaran'];


$xcrud->table('mahasiswa');
$xcrud->order_by('mahasiswa_id','desc');
$xcrud->table_name('Data Nilai Akademik');
$xcrud->limit(20);
// hilangkan
$xcrud->unset_add();
$xcrud->unset_remove();

// tahun ajaran
$xcrud->pass_default('tahun_ajaran', $tahun_ajaran);

// readonly
$xcrud->readonly('nim,nama,tahun_ajaran');

// columns
$xcrud->columns('nim,nama,nilai_akademik',false);

// field
$xcrud->fields('nim,nama,nilai_akademik',false);


// tahun ajaran
$xcrud->pass_var('tahun_ajaran', $tahun_ajaran);
$xcrud->pass_default('tahun_ajaran', $tahun_ajaran);

echo $xcrud->render();
?>
</div>

<?php  
include '../include/footer.php';
?>