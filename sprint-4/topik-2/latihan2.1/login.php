<?php 
session_start();

if (isset($_SESSION['nama'])) {
    header('location: profil.php');
}

$error = '';

if (isset($_POST['submit'])) {
    	$nama = $_POST['nama'];
    	$password = $_POST['password'];
    if (empty($nama) && empty($password)) {
         $error = "Username dan Password salah";         
    }else {
        $_SESSION['nama'] = $nama;
        header('location:profil.php');
    }
}


 ?>

<!DOCTYPE html>
<head>
    <title>Login Sederhana Tanpa Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
 
    <h3>Silakan Login</h3>
 
    <form method="POST" action="login.php">
        Nama : <input type="text" name="nama">
        Password : <input type="password" name="password">
        <input type="submit" name="submit" value="Login"><br>
        <?php echo $error; ?>
    </form>
    
</body>
</html>