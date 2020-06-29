<html>
<head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <title>IOT AEROPONIK</title>
 
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="bootstrap/css/font_size.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="datatables/css/datatables.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/css_hover.css">
 
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #5d6259;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ababab;
  color: #474747;
  text-decoration: none;
}

li a:hover {
  background-color: #00ced1;
  text-decoration: none;
  color: white;
}

.active {
  background-color: #00ced1;
  text-decoration: none;
  color: white;
}
</style>
 
</head>

<body>
    <ul>
    <li><a href="index.php"><b>Beranda</b></a></li>
    <li><a href="tampil_kelembapan.php"><b>Kelembapan</b></a></li>
    <li><a href="tampil_suhu.php"><b>Suhu Udara</b></a></li>
	<li><a href="tampil_kualitas.php"><b>Kualitas Udara</b></a></li>
    <li><a href="tampil_ph.php"><b>pH</b></a></li>
    <li><a class="active" href="control.php"><b>Kontroling</b></a></li>
    <li style="float:right"><a href="index.php"><b>IOT AEROPONIK</b></a></li>
    </ul>


<?php 
include 'koneksi.php';
$db = new alat();

$disable_aktif_pompa="";
$disable_non_pompa="";
$disable_oto_pompa="";

$disable_aktif_hangat="";
$disable_non_hangat="";
$disable_oto_hangat="";


?>

<?php
foreach($db->tampil_pompa() as $x){
	if ($x['status'] == "Aktif"):
		$disable_aktif_pompa="disabled";
		$disable_non_pompa="";
		$disable_oto_pompa="";
	elseif ($x['status'] == "Non-Aktif"):
		$disable_non_pompa="disabled";
		$disable_aktif_pompa="";
		$disable_oto_pompa="";
	elseif ($x['status'] == "Otomatis"):
		$disable_oto_pompa="disabled";
		$disable_aktif_pompa="";
		$disable_non_pompa="";
	endif;
		}
?>

<?php
foreach($db->tampil_keran() as $x){
	if ($x['status'] == "Aktif"):
		$disable_aktif_hangat="disabled";
		$disable_non_hangat="";
		$disable_oto_hangat="";
	elseif ($x['status'] == "Non-Aktif"):
		$disable_non_hangat="disabled";
		$disable_aktif_hangat="";
		$disable_oto_hangat="";
	elseif ($x['status'] == "Otomatis"):
		$disable_oto_hangat="disabled";
		$disable_aktif_hangat="";
		$disable_non_hangat="";
	endif;
		}
?>


<div class="row">
<br>
<hr>
<div class="col-sm-1"></div>
<div class="col-sm-10 frame1">
	<center>
	<br>
	<font class="ukuran1">Kontroling Pada Sawi</font>
	<br>
	<br>

	</table>
	
	<table	width=100%>
		<tr>
		<td width=30% colspan=3><div class="hpompa"><center>Pompa Air</center></div></td>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td width=30% colspan=3><div class="hkeran"><center>Keran Air</center></div></td>
		<td>&nbsp</td>
		
		
		<tr>
		<td colspan=3>
		<?php
		foreach($db->tampil_pompa() as $x){
		?>
		<div class="bpompa"><center><?php echo $x['status']; ?></center></div></td>
		<?php
		}
		?>
		<td>&nbsp</td>
		<td>&nbsp</td>
		
		<td colspan=3>
		<?php
		foreach($db->tampil_keran() as $x){
		?>
		<div class="bkeran"><center><?php echo $x['status']; ?></center></div></td>
		<?php
		}
		?>
		<td>&nbsp</td>
		<td>&nbsp</td>
		
		<td colspan=3>
	
		</tr>
		
		<tr>
		<td>&nbsp</td>
		</tr>
		<tr>
			<td width=14%>
				<center>
				<form method="get" action="pompa.php">
				<button type="submit" class="btn btn-success btn-block btn-lg" id="aktif_pompa" name="btn_aktif" <?php echo $disable_aktif_pompa;?> >Aktif</button>
				</form>
				</center>
			</td>
			<td>&nbsp</td>
			<td width=14%>
				<center>
				<form method="get" action="pompa.php">
				<button type="submit" class="btn btn-danger btn-block btn-lg" id="btn_non" name="btn_non" <?php echo $disable_non_pompa;?> >Non-Aktif</button>
				</form>
				</center>
			</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td width=14%>
				<center>
				<form method="get" action="keran.php">
				<button type="submit" class="btn btn-success btn-block btn-lg" id="btn_non" name="btn_aktif" <?php echo $disable_aktif_hangat;?> >Aktif</button>
				</form>
				</center>
			</td>
			<td>&nbsp</td>
			<td width=14%>
				<center>
				<form method="get" action="keran.php">
				<button type="submit" class="btn btn-danger btn-block btn-lg" id="btn_non" name="btn_non" <?php echo $disable_non_hangat;?> >Non-Aktif</button>
				</form>
				</center>
			</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
			
		
		</tr>
		<tr>
			<td colspan=3>
				<center>
				<form method="get" action="pompa.php">
				<button type="submit" class="btn btn-primary btn-block btn-lg" id="btn_oto" name="btn_oto" <?php echo $disable_oto_pompa;?> >Otomatis</button>
				</form>
				</center>
			</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td colspan=3>
				<center>
				<form method="get" action="keran.php">
				<button type="submit" class="btn btn-primary btn-block btn-lg" id="btn_oto" name="btn_oto" <?php echo $disable_oto_hangat;?> >Otomatis</button>
				</form>
				</center>
			</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		
		</tr>
	</table>
	<br>
	</center>
	</div>
</div>
  	<div class="footer">
		<center>
      <br><font color="#B5B5B5">IOT AEROPONIK</font><br>
      <font color="#B5B5B5">2019</font><br><br>
		</center>
	</div>
</body>
</html>