<div class="w3-container">
<?php
	$xcrud->table('user');
	$xcrud->unset_title();
	$xcrud->table_name('Data User');
	$xcrud->change_type('password', 'password', 'sha1', array('maxlength'=>20,'placeholder'=>'Masukan password'));
	$xcrud->change_type('foto', 'image');
	$xcrud->change_type('akses_level','select','','admin,kemahasiswaan,akademik,pembimbing_vtb,pembimbing_menwa');
	$xcrud->columns('foto,nama,telp,email,akses_level,username');
    echo $xcrud->render();
	?>
</div>