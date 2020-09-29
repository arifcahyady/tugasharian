<?php 
session_start();

if (isset($_SESSION['nama'])) {
    header('location: profil.php');
}

$error = '';

if (isset($_POST['submit'])) {
    	$nama = $_POST['nama'];
        $password = $_POST['password'];
    	$email = $_POST['email'];
    if (empty($nama) && empty($password) && empty($email)) {
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
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="container-fluid">
 <div class="main_content">
     <div class="card text-center rounded-lg" style="width: 35em; height: 30em;background-color: #EEEDED;">
        <div class="card-body"> 
            <h3 class="card-title mb-5">Silahkan Login</h3>
            <form method="POST" action="login.php">
                <input type="text" name="nama" placeholder="Nama" class="card-text mb-4" style="width: 26em; height: 40px;"><br>
                <input type="password" name="password" placeholder="Password" class="card-text mb-4" style="width: 26em; height: 40px;"><br>
                <input type="email" name="email" placeholder="E-mail" class="card-text mb-5" style="width: 26em; height: 40px;"><br>
                <input type="submit" name="submit" value="Login" class="btn btn-primary mb-5"><br>
                <a href="#">Create an account</a><br>
                <?php echo $error; ?>
            </form>
        </div>
    </div>
</div> 
</body>
</html>