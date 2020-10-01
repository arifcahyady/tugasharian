<?php
/**
 * Created by onoPhp.blogspot.com.
 */     
session_start(); // ini adalah kode untuk memulai session
        $host = "localhost";
        $username = "root";
        $password = "";
        
        try{
            $conn = new PDO("mysql:host=$host; dbname=produk", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo "berhasil terkoneksi ke database";
            return $conn;
        }catch (PDOException $e){
            echo "ERROR : " .$e->getMessage();
        }
if(isset($_POST['login'])) { 
    $nama = $_POST['nama']; 
    $password = $_POST['password']; 
    $email = $_POST['email']; 

    try {
        $sql = "SELECT * FROM user WHERE nama = :nama AND password = :password AND email = :email" ; 
        $stmt = $conn->prepare($sql); 
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->execute(); 

        $count = $stmt->rowCount();
        if($count == 1) { 
            $_SESSION['nama'] = $nama; 
            header("Location: index.php"); 
            return;
        }else{
            echo "<div class='alert alert-danger' role='alert' style='text-align: center;'>
                Silahkan isi Username Dan Password
            </div>";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}
?>