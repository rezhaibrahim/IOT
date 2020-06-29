<?php
include("../include/dbconnect.php");
//Creates new record as per request
date_default_timezone_set("Asia/Jakarta");
//Connect to database
$data = json_decode(file_get_contents('php://input'), true);
if(!empty($data))
{
    $tinggicairan = $data['tinggicairan'];
    $suhucairan = $data['suhucairan'];
    $phcairan = $data['phcairan'];
    $kadarethanol = $data['kadarethanol'];
    $kadarnh3 = $data['kadarnh3'];
    $timestamp = date('Y-m-d H:i:s');

	$SQL = "INSERT INTO data_sensor (tinggicairan, suhucairan, phcairan, kadarethanol, kadarnh3, timestamp) VALUES ('".$tinggicairan."', '".$suhucairan."', '".$phcairan."', '".$kadarethanol."', '".$kadarnh3."', '".$timestamp."')";
    mysqli_query($dbh, $SQL);
    $response['message'] = "Data berhasil diupload ke server";
} else {
    $response['message'] = "Tidak ada data masuk ke server";
}
echo json_encode($response);

?>


<?php
include("../include/dbconnect.php");
//Creates new record as per request
date_default_timezone_set("Asia/Jakarta");
//Connect to database
$data = json_decode(file_get_contents('php://input'), true);
if($_SERVER['REQUEST_METHOD']=='POST')   
{
    if(!empty($data))
    {
        $suhu = $data['suhu'];
        $kelembapan = $data['kelembapan'];
        $kualitasudara = $data['kualitasudara'];
        $ph = $data['ph'];
        $timestamp = date('Y-m-d H:i:s');

        $SQL = "INSERT INTO data_sensor (suhu, kelembapan, kualitasudara, ph, timestamp) VALUES ('".$suhu."', '".$kelembapan."', '".$kualitasudara."', '".$ph."', '".$timestamp."')";
        mysqli_query($dbh, $SQL);
        $response['message'] = "Data berhasil dimasukkan ke database server";

    } else {
        $response['message'] = "Tidak ada data masuk ke server";
    } 
} else {
    $response['message'] = "Request tidak valid";
}   


echo json_encode($response);

?>