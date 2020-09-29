<?php 
session_start();

if (!isset($_SESSION['nama'])) {
	header('location: login.php');
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profil</title>
 </head>
 <body>
 <h3>"Hallo Selamat Datang "	<?php echo $_SESSION['nama'];?></h3>
 <a href="logout.php">Logout</a>
 </body>
 </html>