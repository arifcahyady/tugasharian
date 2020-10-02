<?php 
// include 'controller.php';
// $data = new Connection();

if (isset($_POST['add'])) {
	$nama = $_POST['nama'];
	$divisi = $_POST['divisi'];
	$asal = $_POST['asal'];
	if ($data->insert($nama,$divisi,$asal) >0) {
		header('location: layout.php');
	}
}
 ?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
 <main>
 	<div class="display-4 mt-4 mb-5">Program input data</div>
 	<form action="" method="POST">
 		<input type="text" name="nama" placeholder="Nama">
 		<input type="text" name="divisi" placeholder="Divisi">
 		<input type="text" name="asal" placeholder="Asal">
 		<input type="submit" name="add" value="Add">
 	</form>
 </main>