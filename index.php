<html>
<head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <title>IOT AEROPONIK</title>
 
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/css_hover.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/font_size.css">

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
	  <li><a class="active" href="index.php"><b>Beranda</b></a></li>
    <li><a href="tampil_kelembapan.php"><b>kelembapan udara</b></a></li>
	  <li><a href="tampil_suhu.php"><b>Suhu</b></a></li>
	  <li><a href="tampil_ph.php"><b>pH</b></a></li>
    <li><a href="tampil_kualitas.php"><b>Kualitas Udara</b></a></li>
	  <li><a href="control.php"><b>Kontroling</b></a></li>
	  <li style="float:right"><a href="index.php"><b>IOT AEROPONIK</b></a></li>
    </ul>

<?php 
include 'koneksi.php';
$db = new data_sensor();
?>
<br>
<div class="row">
<div class="col-sm-1">
  
</div>
<div class="col-sm-10 frame1">
	<center>
  	<br>
  	 <font class="ukuran1">Data Monitoring  Sawi </font>
  	<br>
	<br>
  <br>
  <br>
  <br>
	<table width=100%>
		<tr>
		<td width=19%><div class="htinggi"><center>Kelembapan</center></div></td>
		<td>&nbsp</td>
		<td width=19%><div class="hsuhu"><center>Suhu udara</center></div></td>
		<td>&nbsp</td>
    <td width=19%><div class="hsuhu"><center>Kualitas udara</center></div></td>
		<td>&nbsp</td>
		<td width=19%><div class="hph"><center>pH</center></div></td>
    <td>&nbsp</td>
		</tr>
		
		<?php
		foreach($db->tampil_terakhir() as $x){
		?>
		
		<tr>
		<td width=19%><div class="btinggi"><center><br><?php echo $x['kelembapan']; ?> % <br><br></center></div></td>
		<td>&nbsp</td>
		<td width=19%><div class="bsuhu"><center><br><?php echo $x['suhu']; ?>&#176;C <br><br></center></div></td>
		<td>&nbsp</td>
		<td width=19%><div class="bph"><center><br><?php echo $x['kualitasudara']; ?> ppm<br><br></center></div></td>
    <td>&nbsp</td>
    <td width=19%><div class="bamoniak"><center><br><?php echo $x['ph']; ?>  <br><br></center></div></td>
    <td>&nbsp</td>
		</tr>
		<tr>
		<td colspan="10"><br><font class="ukuran2"><center><br><br>Berdasarkan Data Pada : <br>
			Tanggal : <?php echo date('d-m-Y', strtotime($x['timestamp'])); ?> Jam : <?php echo date('H:i:s', strtotime($x['timestamp'])); ?></center></font></td>
		</tr>
		
		<?php
		}
		?>
		
	</table>
	<br>
	</center>
  </div>
</div>
<!--
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8"><center>
  <br>
  <center>
    <table width=100%>
    <tr>
    <td align="center">
    <div class="hovereffect">
    <a href="tampil_kelembapan.php">
          <img src="gambar/KELEMBAPAN.jpg" width="204" height="153" href="tampil_kelembapan.php"><div class="overlay">
            <h2></h2>
  				  <p><a href="tampil_kelembapan.php">Monitoring Kelembapan</a></p> 
  		</div>
  		</a>
        </div>
    </td>
    <td>&nbsp&nbsp&nbsp</td>

    <td align="center">
    <div class="hovereffect">
    <a href="tampil_suhu.php">
          <img src="gambar/SUHU.jpg" width="204" height="153" href="tampil_suhu.php"><div class="overlay">
            <h2></h2>
  				  <p><a href="tampil_suhu.php">Monitoring Suhu</a></p> 
  		</div>
  		</a>
        </div>
    </td>
    <td>&nbsp&nbsp&nbsp</td>

    <td align="center">
    <div class="hovereffect">
    <a href="tampil_ph.php">
          <img src="gambar/PH.jpg" width="204" height="153" href="tampil_ph.php"><div class="overlay">
            <h2></h2>
  				  <p><a href="tampil_ph.php">Monitoring pH</a></p> 
  		</div>
  		</a>
        </div>
    </td>
      
    </table>
  </center>
  <hr>
  </center>
  </div>
</div>
-->
	<div class="footer">
		<center>
			<br><font color="#B5B5B5">IOT AEROPONIK</font><br>
			<font color="#B5B5B5">2019</font><br><br>
		</center>
	</div>

<script type="text/javascript" src="datatables/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="datatables/datatables.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {      
         "searching": false,
         "paging": true, 
         "info": true,         
         "lengthChange":true 
    } );
} );
</script>

</body>
</html>