<?php

include '../include/dbconnect.php';

//Get current date and time
date_default_timezone_set('Asia/Jakarta');
$timestamp = date("Y-m-d H:i:s");

if($_SERVER['REQUEST_METHOD']=='GET')	
{	
	$serialstatus = "";
	$id = 1;
	$queryswitch = mysqli_query($dbh, "SELECT * FROM status_alat ");
	while ($switch = mysqli_fetch_array($queryswitch)) {
		$response[$id]['no'] = $switch['no'];
		$response[$id]['alat'] = $switch['alat'];
		$response[$id]['status'] = $switch['status'];
		if ($id == 1) {
			$serialstatus .= $switch['status'];
		} else {
			$serialstatus .= "&";
			$serialstatus .= $switch['status'];
		}
		$id++;		
	}
}

echo $serialstatus;

$dbh->close();
?> 