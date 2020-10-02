<?php 
include 'controller.php';

$data = new Connection();
$take = $data->get();
include 'input.php';
	

 ?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
 <main>
 	<table>
 		<div class="h4 mb-4">Table info data</div>
 		<tr class="container-fluid table border-info" style="width: 70%;">
 			<th >Nama </th>
 			<th>Divisi</th>
 			<th>Asal</th>
 			<th>Action</td>
 		</tr>
 	</table>
 </main>

 <?php foreach ($take as $key) :?>
	
	 	<tr >
	 		<td> <?=$key['nama']?> </td>
	 		<td> <?=$key['divisi']?> </td>
	 		<td> <?=$key['asal'] ?> </td>
	 		<td>
	 			<a href="hapus.php">Hapus</a>
	 			<a href="edit.php">Edit</a>
	 		</td><br>
	 	</tr>
	 		
 <?php endforeach ?>