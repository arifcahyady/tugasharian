<?php 
if (isset($_POST['add'])) {
	$nama = $_POST['nama_barang'];
	$harga = $_POST['harga'];
	$tujuan = $_POST['tujuan'];
	if($data->insert($nama,$harga,$tujuan) > 0) {
		echo "<script>
		document.location.href='layout.php'
		</script>";
	}
}
 ?>
<head>
	<title>Program Input</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="h2 mt-3 mb-5 container-fluid" >Program Input Data</div>
	<form action='layout.php'  method='POST' class='container-fluid mb-5'>
		<input type='text' name='nama_barang' placeholder='Nama'>
		<input type='number' name='harga' placeholder='Harga'>
		<input type='text' name= 'tujuan' placeholder='Tujuan'>
		<input type='submit' name= 'add' value='Add' class="btn-info">
	</form>
</body>
