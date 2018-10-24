<nav class="w3-sidebar w3-bar-block w3-card w3-collapse w3-animate-left" style="z-index:3;width: 270px" id="mySidebar">
	<div class="w3-padding w3-center">
		<img src="../uploads/logo/<?php echo $setting['logo']; ?>" width="50%">
		<br>
		<?php echo $_SESSION['nama']; ?>
		<br>
		<span class="w3-tag w3-teal"><?php echo $_SESSION['akses_level'] ?></span>
	</div>

	<?php 
	if(isset($_GET['page'])){ 
		$page = $_GET['page'];
	}
	?>
	
	<!-- Menu dashboard -->
	<a href="index.php?page=dashboard" class="w3-bar-item w3-button <?php if($page == 'dashboard'){echo 'w3-theme';} ?>"><i class="fa fa-star w3-margin-right"></i>DASHBOARD</a>

	<?php if($_SESSION['akses_level'] == 'admin' OR $_SESSION['akses_level'] == 'kemahasiswaan'){ ?>

	<!-- Menu mahasiswa -->
	<a href="index.php?page=mahasiswa" class="w3-bar-item w3-button <?php if($page == 'mahasiswa'){echo 'w3-theme';} ?>"><i class="fa fa-users w3-margin-right"></i>MAHASISWA</a>
	<?php } ?>

	<?php if($_SESSION['akses_level'] == 'admin' OR $_SESSION['akses_level'] == 'akademik'){ ?>

	<!-- Menu Nilai akademik -->
	<a href="index.php?page=nilai_akademik" class="w3-bar-item w3-button <?php if($page == 'nilai_akademik'){echo 'w3-theme';} ?>"><i class="fa fa-book w3-margin-right"></i>NILAI AKADEMIK</a>
	<?php } ?>

	<?php if($_SESSION['akses_level'] == 'admin' OR $_SESSION['akses_level'] == 'pembimbing_vtb' OR $_SESSION['akses_level'] == 'pembimbing_menwa'){ ?>

     <!-- Menu Nilai organisasi -->
	<a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button <?php if($page == 'nilai_organisasi_vtb' | $page == 'nilai_organisasi_menwa'){echo 'w3-grey';} ?>"><i class="fa fa-book w3-margin-right"></i>NILAI ORGANISASI<i class="w3-margin-left fa fa-caret-down"></i></a>

	<div id="Demo1" class="w3-hide <?php if($page == 'nilai_organisasi_vtb' | $page == 'nilai_organisasi_menwa'){echo 'w3-show';} ?>">

		<?php if($_SESSION['akses_level'] == 'admin' OR $_SESSION['akses_level'] == 'pembimbing_vtb'){ ?>
		<a href="index.php?page=nilai_organisasi_vtb" class="w3-bar-item w3-button <?php if($page == 'nilai_organisasi_vtb'){echo 'w3-theme';} ?>"><i class="fa fa-gear w3-margin-right w3-margin-left"></i>VTB</a>
		<?php } ?>
		<?php if($_SESSION['akses_level'] == 'admin' OR $_SESSION['akses_level'] == 'pembimbing_menwa'){ ?>
		<a href="index.php?page=nilai_organisasi_menwa" class="w3-bar-item w3-button <?php if($page == 'nilai_organisasi_menwa'){echo 'w3-theme';} ?>"><i class="fa fa-gear w3-margin-right w3-margin-left"></i>MENWA</a>
		<?php } ?>
	</div>
	<?php } ?>


	<?php if($_SESSION['akses_level'] == 'admin'){ ?>
	<!-- Menu Setting -->
	<a id="myBtn" onclick="myFunc('Demo4')" href="javascript:void(0)" class="w3-bar-item w3-button <?php if($page == 'setting' | $page == 'user'){echo 'w3-grey';} ?>"><i class="fa fa-gear w3-margin-right"></i>SETTING<i class="w3-margin-left fa fa-caret-down"></i></a>

	<div id="Demo4" class="w3-hide <?php if($page == 'setting' | $page == 'user'){echo 'w3-show';} ?>">
		<a href="index.php?page=setting" class="w3-bar-item w3-button <?php if($page == 'setting'){echo 'w3-theme';} ?>"><i class="fa fa-gear w3-margin-right w3-margin-left"></i>Aplication</a>
		<a href="index.php?page=user" class="w3-bar-item w3-button <?php if($page == 'user'){echo 'w3-theme';} ?>"><i class="fa fa-user w3-margin-right w3-margin-left"></i>User</a>
	</div>
	<?php } ?>

	<!-- menu logout -->
	<a href="index.php?page=logout" class="w3-bar-item w3-button w3-black" onclick="return confirm('Yakin Keluar?')"><i class="fa fa-sign-out w3-margin-right"></i>LOGOUT</a>

</nav>

<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<div class="w3-main" style="margin-left: 270px;">

	<div class="w3-padding w3-theme w3-card w3-large" >

		<button class="w3-button w3-theme w3-large w3-hide-large" onclick="w3_open()">&#9776;</button>
		<?php if(isset($title)){echo $title; }else{echo $setting['nama_website'];}?>
	</div>

	<div style="margin-top: 20px">