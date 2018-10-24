<?php
include '../include/auth.php';
include '../include/database.php';
include "../operator/xcrud.php";
$xcrud = Xcrud::get_instance();

// query setting
$setting = mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM setting LIMIT 1'));

// menset theme
$theme_color = $setting['theme'];
if($theme_color == 'red'){
	$style = 'w3-theme-red.css';
}elseif ($theme_color == 'green') {
	$style = 'w3-theme-teal.css';
}elseif ($theme_color == 'orange') {
	$style = 'w3-theme-deep-orange.css';
}elseif ($theme_color == 'blue') {
	$style = 'w3-theme-blue.css';
}elseif ($theme_color == 'brown') {
	$style = 'w3-theme-brown.css';
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if(isset($title)){echo $title.' - '; }?><?php echo $setting['nama_website']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../logo.png">
  <link rel="stylesheet" href="../assets/css/w3.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/<?php echo $style ?>">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <style>
  html, body, h1, h2, h3, h4, h5, h6 {
    font-family: 'Roboto', sans-serif;
  }
  </style>

</head>
<body>
<?php include 'nav.php'; ?>