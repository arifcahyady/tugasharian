<?php
include ('controller.php');

if(!isset($_SESSION['nama'] )== 0) { 
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>">

	<div class="main_content">
		<form action="" method="post" class="card text-center box_shadow bg_card" style="width: 400px; height: 400px;" >
		 	<table class="card-body">
					<h5 class="card-title mt-4 mb-5">Silahkan login</h5>
				 	<tr>	
				 		<td class="card-text" style="text-align: center;"><input type="text" name="nama" placeholder="Nama" class="border mb-3" style="height: 30px; width: 15em;"></td>
				 	</tr>
				 	<tr>
				 		<td class="card-text" style="text-align: center;"><input type="password" name="password" placeholder="Password" class="border mb-3" style="height: 30px; width: 15em;"></td>
				 	</tr>
				 	<tr>
				 		<td class="card-text" style="text-align: center;"><input type="email" name="email" placeholder="Email" class="border mb-3" style="height: 30px; width: 15em;"></td>
				 	</tr>
				 	<tr>
				 		<td style="text-align: center;"><button type="submit" name="login" class="btn btn-info mb-4">Login</button></td>
				 	</tr>
				 	<tr>
				 		<td style="text-align: center;"><a href="#"> Create an Account ?</a></td>
				 	</tr>
		 	</table>

		 </form>
	 </div>
</body>
</html>
 