<?php 

header('refresh:2; url=control.php');

include 'koneksi.php';
$db = new alat();

if (isset($_GET["btn_aktif"])){
	$db->aktif_keran();
} else if (isset($_GET["btn_non"])){
	$db->mati_keran();
} else if (isset($_GET["btn_oto"])){
	$db->otomatis_keran();
}

?>