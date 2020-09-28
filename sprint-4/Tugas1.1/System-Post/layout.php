<?php 

include ('controller.php');
$data = new Connection();
$get = $data->show();
include ('input.php');
?>
<head>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<main>
	<div class="mt-4 mb-4 h5" style="margin-left: 20px;">Tabel Info Produk</div>
	<table class="border table display" border="1px">
		<tr>
			<th bgcolor="#B8B1B1">Nama Barang</th>
			<th bgcolor="#B8B1B1">Harga</th>
			<th bgcolor="#B8B1B1">Tujuan</th>
			
		</tr>
		<?php
		foreach ($get as $key) {
		 	echo "<tr>";
			echo "<td>" . $key['nama_barang'] . "</td>";
			echo "<td>" . $key['harga'] . "</td>";
			echo "<td>" . $key['tujuan'] . "</td>";
			echo "</tr>";
		 } 			
		?>
	</table>
</main>