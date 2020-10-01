<?php 
include ('controller.php');

$edit = new Connection;
// $delete = new Connection;

$get = $_GET['id'];


if (isset($_POST['edit'])) {
	$nama = $_POST['nama_barang'];
	$harga = $_POST['harga'];
	$tujuan = $_POST['tujuan'];
	if($edit->update($get,$nama,$harga,$tujuan) >0) {
		header('location: layout.php');
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="h2 mt-3 mb-5 container-fluid" >Program Edit Data</div>
	<form  method='POST' class='container-fluid mb-5'>
		<input type='text' name='nama_barang' placeholder='Nama' style="height: 35px;">
		<input type='number' name='harga' placeholder='Harga' style="height: 35px;">
		<input type='text' name= 'tujuan' placeholder='Tujuan' style="height: 35px;">
		<button type="submit" name="edit" class="btn btn-info" style="height: 35px;margin-bottom: 5px;">
			Edit
		</button>
	</form>
</body>
</html>