<?php 
include 'evaluasi2.php';

$register = new Register();
// $delete = new Delete();

echo "Selamat Datang di Halaman Pondok!!". "\n";
echo "1.Register 2.Lihat Profil :";
$kondisi = trim(fgets(STDIN));

echo "Masukan Nama : ";
$nama = trim(fgets(STDIN));


	if ($kondisi == 1) {
		try {
			echo $register->daftar($nama);
		}catch(Exception $error) { 
			 $error->getMessage();
			die;
		}
	}elseif ($kondisi == 2) {
		try {
			echo $register->lihatProfile($nama);
			die;
		}catch(Exception $error) {
			$error->getMessage();
		}
	}else {
		echo "Input salah";

	}

echo "1.Arif Cahyady \n2.Intan \n3.Joko" . "\n";
echo "Mau Tambah atau Delete User ? " . "\n";
$pilih = strtolower(trim(fgets(STDIN)));

	if ($pilih == "delete") {
		try {
			echo $register->hapus($index);
		}catch(Exception $error) {
			$error->getMessage();
		}
	}elseif ($pilih == "tambah") {
	echo "Masukan Nama : ";
	$nama = trim(fgets(STDIN));
	 try {
	 	echo $register->daftar($nama);
	 	echo $nama;
	 }catch(Exception $error) {
	 	$error->getMessage();
	 }
	}else {
	 	echo "Input salah";
	 }
