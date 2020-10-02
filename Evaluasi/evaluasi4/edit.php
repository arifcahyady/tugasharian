<?php 
include 'controller.php';
$edit = new Connection();
	
$get = $_GET['id'];

if (isset($_POST['edit'])) {
	$nama = $_POST['nama'];
	$divisi = $_POST['divisi'];
	$asal = $_POST['asal'];
	if ($edit->update($get,$nama,$divisi,$asal) >0) {
		header('location: layout.php');
	}
}
 ?>

 <main>
 	<form action="layout.php" method="POST">
 		<input type="text" name="nama" placeholder="Nama">
 		<input type="text" name="divisi" placeholder="Divisi">
 		<input type="text" name="asal" placeholder="Asal">
 		<input type="submit" name="edit" value="Edit">
 	</form>
 </main>