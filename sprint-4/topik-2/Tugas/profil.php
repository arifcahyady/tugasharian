<?php 


if (isset($_POST['logout'])) {
	setcookie('arif','',time() - 3600);
	header('location: Cookie.php');
}
if (!$_COOKIE['arif']) {
	header('location: Cookie.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hello world</h1>
<form action="" method="POST"><button name="logout" type="submit">Logout</button></form>
</body>
</html>