<?php
$title 	= 'Data Mahasiswa';
include "../include/header.php";
include "../include/database.php";
?>

<div class="w3-container">
<?php
// set tahun ajaran
$tahun_ajaran = $_SESSION['tahun_ajaran'];


$xcrud->table('mahasiswa');
$xcrud->order_by('mahasiswa_id','desc');
$xcrud->table_name('Data Mahasiswa');
$xcrud->limit(20);

// columns
$xcrud->columns('tahun_ajaran',true);

// field
$xcrud->fields('nilai_akademik,nilai_vtb,nilai_menwa,tahun_ajaran',true);

// jurusan
$xcrud->change_type('program_studi','select','','PGSD, Ilmu Hukum,Manajemen,Akuntansi,Desain Komunikasi Visual,Sistem Inforamsi,Teknik Informatika,Teknik Sipil,Teknik Elektro,Teknik Mesin');


echo $xcrud->render();
?>
</div>

<?php  
include '../include/footer.php';
?>