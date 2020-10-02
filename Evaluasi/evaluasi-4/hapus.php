<?php 
include 'controller.php';
$delete = new Connection();

$get = $_GET['id'];

if ($delete->delete($_GET['id']) >0) {
	header('location: layout.php');
}

 ?>