<nav class="w3-sidebar w3-bar-block w3-card w3-collapse w3-animate-left" style="z-index:3;width: 270px" id="mySidebar">
	<div class="w3-padding w3-center">
		<img src="../uploads/logo/<?php echo $setting['logo']; ?>" width="50%">
	</div>

	<!-- Menu dashboard -->
	<a href="index.php" class="w3-bar-item w3-button <?php if($page_name == 'index.php'){echo 'w3-theme';} ?>"><i class="fa fa-star w3-margin-right"></i>DASHBOARD</a>

	<!-- Menu mahasiswa -->
	<a href="mahasiswa.php" class="w3-bar-item w3-button <?php if($page_name == 'mahasiswa.php'){echo 'w3-theme';} ?>"><i class="fa fa-users w3-margin-right"></i>MAHASISWA</a>

	<!-- Menu Nilai akademik -->
	<a href="nilai_akademik.php" class="w3-bar-item w3-button <?php if($page_name == 'nilai_akademik.php'){echo 'w3-theme';} ?>"><i class="fa fa-book w3-margin-right"></i>NILAI AKADEMIK</a>

     <!-- Menu Nilai organisasi -->
	<a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button <?php if($page_name == 'nilai_organisasi_vtb.php' | $page_name == 'nilai_organisasi_menwa.php'){echo 'w3-grey';} ?>"><i class="fa fa-gear w3-margin-right"></i>NILAI ORGANISASI<i class="w3-margin-left fa fa-caret-down"></i></a>

	<div id="Demo1" class="w3-hide <?php if($page_name == 'nilai_organisasi_vtb.php' | $page_name == 'nilai_organisasi_menwa.php'){echo 'w3-show';} ?>">
		<a href="nilai_organisasi_vtb.php" class="w3-bar-item w3-button <?php if($page_name == 'nilai_organisasi_vtb.php'){echo 'w3-theme';} ?>"><i class="fa fa-gear w3-margin-right w3-margin-left"></i>VTB</a>
		<a href="nilai_organisasi_menwa.php" class="w3-bar-item w3-button <?php if($page_name == 'nilai_organisasi_menwa.php'){echo 'w3-theme';} ?>"><i class="fa fa-gear w3-margin-right w3-margin-left"></i>MENWA</a>
	</div>

	<!-- Menu Setting -->
	<a id="myBtn" onclick="myFunc('Demo4')" href="javascript:void(0)" class="w3-bar-item w3-button <?php if($page_name == 'setting.php' | $page_name == 'setting_backup.php'){echo 'w3-grey';} ?>"><i class="fa fa-gear w3-margin-right"></i>SETTING<i class="w3-margin-left fa fa-caret-down"></i></a>

	<div id="Demo4" class="w3-hide <?php if($page_name == 'setting.php' | $page_name == 'setting_backup.php'){echo 'w3-show';} ?>">
		<a href="setting.php" class="w3-bar-item w3-button <?php if($page_name == 'setting.php'){echo 'w3-theme';} ?>"><i class="fa fa-gear w3-margin-right w3-margin-left"></i>Aplication</a>
	</div>

	<!-- menu logout -->
	<a href="logout.php" class="w3-bar-item w3-button w3-black" onclick="return confirm('Yakin Keluar?')"><i class="fa fa-sign-out w3-margin-right"></i>LOGOUT</a>

</nav>

<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<div class="w3-main" style="margin-left: 270px;">

	<div class="w3-padding w3-theme w3-card w3-large" >

		<button class="w3-button w3-theme w3-large w3-hide-large" onclick="w3_open()">&#9776;</button>
		<?php if(isset($title)){echo $title; }else{echo $setting['nama_website'];}?>
	</div>

	<div style="margin-top: 20px">