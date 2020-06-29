<html>
<head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <title>IOT AEROPONIK</title>
 
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="datatables/css/datatables.css">
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
    <li><a href="index.php"><b>Beranda</b></a></li>
    <li><a href="tampil_kelembapan.php"><b>kelembapan</b></a></li>
    <li><a href="tampil_suhu.php"><b>Suhu</b></a></li>
    <li><a class="active" href="tampil_ph.php"><b>pH</b></a></li>
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
<div class="col-sm-2"></div>
<div class="col-sm-8 frame1">
	<center>
	<br>
	<font class="ukuran1">Kondisi pH Pada Nutrisi</font>
	<br>
	<br>
	<table	width=50%>
		<?php
		$no = 1;
		foreach($db->tampil_terakhir() as $x){
		?>
		<tr>
		<td width=32%><div class="hph"><center>pH</center></div></td>
		</tr>
		
		<tr>
		<td width=32%><div class="bph"><center><?php echo $x['ph']; ?></center></div></td>
		</tr>
		
		<tr>
		<td><br><font class="ukuran2"><center>Berdasarkan Data Pada : <br>
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

<div class="row">
  <div class="col-sm-2"> </div>
  <div class="col-sm-8">
    <hr><br>
  </div>
</div>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
	<center>
    <table class="table table-striped table-bordered display" id="example" width=70%>
      <thead>
        <tr>
          <th>No.</th>
		  <th>Tanggal </th>
		  <th>Jam </th>
          <th>pH</th>
        </tr>
      </thead>
	  <tbody>
	  
	<?php
	$no = 1;
	foreach($db->tampil_data_sensor() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
    <td><?php echo date('d-m-Y', strtotime($x['timestamp'])); ?></td>
    <td><?php echo date('H:i:s', strtotime($x['timestamp'])); ?></td>
		<td><?php echo $x['phcairan']; ?></td>
	</tr>
	<?php 
	}
	?>
      </tbody>
    </table>
	</center>
  </div>
</div>
  	<div class="foot">
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