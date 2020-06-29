<?php

include '../include/dbconnect.php';

//Get current date and time
date_default_timezone_set('Asia/Jakarta');
$timestamp = date("Y-m-d H:i:s");

if($_SERVER['REQUEST_METHOD']=='GET')	
{	
	$queryswitch = mysqli_query($dbh, "SELECT * FROM sprinkler");
	$switch = mysqli_fetch_array($queryswitch);
	$response['status'] = $switch['status'];
	$response['message'] = "Status sprinkler berhasil ditampilkan";

} else {
	$response['status'] = NULL;
	$response['message'] = "Request tidak valid";
}

echo json_encode($response);

$dbh->close();
?> 