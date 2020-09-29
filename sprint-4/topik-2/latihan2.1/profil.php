<?php 
session_start();

if (!isset($_SESSION['nama'])) {
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="profil.css">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg mt-3 container">
  <a class="navbar-brand" href="#">ArifRoom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- <div class="h1">Selamat Datang di System Input</div> -->
</header>
<h3 class="title_content display-4">Hallo Selamat Datang <?php echo $_SESSION['nama'];?></h3>
<main>
	<div class="naon">
		<div class="etah">
			<div class="title_main">System Post</div>
			<div class="content_main">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	</div>
			<div class="footer_main"><a href="System-Post/layout.php">Go to System</a></div>
		</div>
		<div class="opo">
			<div class="title_main">System Get</div>
			<div class="content_main">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			<div class="footer_main"><a href="System-Get/layout.php">Go to System</a></div>
		</div>
	</div>
</main>
</body>
</html>

<!-- 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profil</title>
 </head>
 <body>
 
 <a href="logout.php">Logout</a>
 </body>
 </html> -->