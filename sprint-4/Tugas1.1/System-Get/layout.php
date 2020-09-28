<?php 

include ('controller.php');
$data = new Connection();
$take = $data->show();
include ('input.php');
?>
<head>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<main>
	<div class="mt-4 mb-4 h5" style="margin-left: 20px;">Tabel Info Pengiriman</div>
	<table class="border table display" border="1px">
		<tr>
			<th bgcolor="#B8B1B1">Nama Kurir</th>
			<th bgcolor="#B8B1B1">Nama Pengirim</th>
			<th bgcolor="#B8B1B1">Asal barang</th>
			<th bgcolor="#B8B1B1">Tujuan</th>
			
		</tr>
		<?php
		foreach ($take as $key) {
		 	echo "<tr>";
			echo "<td>" . $key['nama_kurir'] . "</td>";
			echo "<td>" . $key['nama_pengirim'] . "</td>";
			echo "<td>" . $key['asal'] . "</td>";
			echo "<td>" . $key['tujuan'] . "</td>";
			echo "</tr>";
		 } 			
		?>
	</table>
</main>