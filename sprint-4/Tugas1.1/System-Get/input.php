<?php 
if (isset($_GET['add'])) {
	$nama_kurir = $_GET['nama_kurir'];
	$nama_pengirim = $_GET['nama_pengirim'];
	$asal = $_GET['asal'];
	$tujuan = $_GET['tujuan'];

	if ($data->insert($nama_kurir,$nama_pengirim,$asal,$tujuan) > 0){
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
	<form action='layout.php' method='GET' class='container-fluid mb-5'>
		<input type='text' name='nama_kurir' placeholder='Nama kurir'>
		<input type='text' name='nama_pengirim' placeholder='Nama pengirim'>
		<input type='text' name= 'asal' placeholder='Asal'>
		<input type='text' name= 'tujuan' placeholder='Tujuan'>
		<input type='submit' name= 'add' value='Add' class="btn-info">
	</form>
</body>
