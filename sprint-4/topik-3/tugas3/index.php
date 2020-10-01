<?php 
include ('controller.php');

// session_start();

if (isset($_SESSION['nama']) ==0) {
	header('location: login.php');
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>index</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 </head>
 <body class="container-fluid">
 	<h1 class="mt-4 display-4 mb-4">Hello <?php echo $_SESSION['nama'] ?></h1>
 	<a href="System-CRUD/layout.php" style="margin-right: 6px;">//Go to System </a>
 	<a href="logout.php" class="text-danger">// Logout</a>
 </body>
 </html>