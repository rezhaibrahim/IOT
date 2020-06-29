<?php
include("../include/dbconnect.php");
//Creates new record as per request
date_default_timezone_set("Asia/Jakarta");
//Connect to database
$data = $_FILES['foto']['name'];
if($_SERVER['REQUEST_METHOD']=='POST')   
{
    if(!empty($data))
    {
        $timestamp = date('Y-m-d H:i:s');
        $allowed_ext  = array('bmp', 'jpg', 'jpeg', 'png', 'gif'); // Jenis file yang diperbolehkan untuk diupload
        $file_name    = $_FILES['foto']['name']; // img adalah name dari tombol input pada form
        $file_ext     = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); // Membuat ekstensi file
        $file_new_name = date('Y-m-d-H-i-s').'-'.$file_name;
        $SQL = "INSERT INTO foto_tanaman (nama_file, timestamp) VALUES ('".$file_new_name."', '".$timestamp."')";
        if(in_array($file_ext, $allowed_ext) === true && mysqli_query($dbh, $SQL)) // Pengecekan tipe file yang diperbolehkan
        {
            $target_file = __DIR__.'/../uploads/'.$file_new_name; 
            move_uploaded_file($_FILES['foto']['tmp_name'],$target_file);
            $response['message'] = "Data berhasil dimasukkan ke database server";
        } else if (!in_array($file_ext, $allowed_ext)) {
            $response['message'] = "Jenis file yang diunggah tidak diperbolehkan diunggah ke server";
        } else if (!mysqli_query($dbh, $SQL)) {
            $response['message'] = "Data tidak dapat diunggah ke server";
        }
    } else {
        $response['message'] = "Tidak ada data masuk ke server";
    } 
} else {
    $response['message'] = "Request tidak valid";
}   

echo json_encode($response);

?>