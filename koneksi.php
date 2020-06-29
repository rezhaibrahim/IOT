<?php
class database{

	var $host = "localhost";
	var $uname = "reza";
	var $pass = "reza";
	var $db = "aeroponik";

	function __construct(){ 

	}
}

class data_sensor{
	function tampil_data_sensor(){
		include 'include/dbconnect.php';
		$data = mysqli_query($dbh, "SELECT * from data_sensor order by id desc");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function tampil_terakhir(){
		include 'include/dbconnect.php';
		$data = mysqli_query($dbh, "SELECT * from data_sensor order by id desc limit 1");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
}

class alat{
	function aktif_pompa(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 1 WHERE no=1");
	}
	
	function aktif_keran(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 1 WHERE no=2");
	}
	
	function aktif_kipas(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 1 WHERE no=3");
	}
	
	function mati_pompa(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 0 WHERE no=1");
	}
	
	function mati_keran(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 0 WHERE no=2");
	}
	
	function mati_kipas(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 0 WHERE no=3");
	}
	
	function otomatis_pompa(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 2 WHERE no=1");
	}
	
	function otomatis_keran(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 2 WHERE no=2");
	}
	
	function otomatis_kipas(){
		include 'include/dbconnect.php';
		mysqli_query($dbh, "UPDATE status_alat SET status = 2 WHERE no=3");
	}
	
	function tampil_pompa(){
		include 'include/dbconnect.php';
		$data = mysqli_query($dbh, "SELECT alat, (CASE WHEN status=0 THEN 'Non-Aktif' WHEN status=1 THEN 'Aktif' ELSE 'Otomatis' END) AS status from status_alat WHERE no=1");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function tampil_keran(){
		include 'include/dbconnect.php';
		$data = mysqli_query($dbh, "SELECT alat, (CASE WHEN status=0 THEN 'Non-Aktif' WHEN status=1 THEN 'Aktif' ELSE 'Otomatis' END) AS status from status_alat where no=2");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function tampil_kipas(){
		include 'include/dbconnect.php';
		$data = mysqli_query($dbh, "SELECT alat, (CASE WHEN status=0 THEN 'Non-Aktif' WHEN status=1 THEN 'Aktif' ELSE 'Otomatis' END) AS status from status_alat where no=3");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function tampil_alat(){
		include 'include/dbconnect.php';
		$data = mysqli_query($dbh, "SELECT * from status_alat");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
} 

?>