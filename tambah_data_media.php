<?php 
include 'koneksi.php';
$db = new media_ternak();

$db->input_media_ternak($_GET['kelembapan'],$_GET['ph'],$_GET['suhu']);

?>