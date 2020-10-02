<?php 
include 'controller.php';
$delete = new Connection();

$get = $_GET['id'];

if ($delete->delete($get) >0) {
	header('location: layout.php');
}

 ?>