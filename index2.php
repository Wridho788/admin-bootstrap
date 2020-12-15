<?php
require("conf/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
    <title>Document</title>
</head>
<body>
	<center> 
		<h2>Data dari Tanggal</h2>
		<br/><br/><br/>
		<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal2">
			<input type="submit" value="FILTER">
		</form>
		<br/> <br/>
		<table border="1">
			<tr>
				
				<th>Jumlah</th>
			</tr>
			<?php 
 
			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$tgl2 = $_GET['tanggal2'];
                $sql = mysqli_query($koneksi,"SELECT SUM(revenue) as revenue_mtd from excel where date between '$tgl' and '$tgl2'");
                
			}else{
				$sql = mysqli_query($koneksi,"SELECT * from excel");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
                <td><?php 
                $data['revenue_mtd']; 
                $hasil_rupiah = " " . number_format($data['revenue_mtd'], 2, ',', '.');
                echo round($hasil_rupiah,2);
                ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
 
	</center>
</body>


</html>