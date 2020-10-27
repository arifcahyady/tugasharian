<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
	@if(session('sukses'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <strong>Good!</strong> {{ session('sukses') }}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	@endif
	<div class="row mb-5">
		<div class="col-6">
			<h1>Data Siswa</h1>
		</div>
		<div class="col-6 float-right">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Tambah data santri
			</button>
		</div>
	</div>
	<table class="table table-hover">
	<tr>
		<th>NAMA DEPAN</th>
		<th>NAMA BELAKANG</th>
		<th>JENIS KELAMIN</th>
		<th>AGAMA</th>
		<th>ALAMAT</th>
	</tr>

	@foreach($data as $siswa)

	<tr>
		<td>{{ $siswa->nama_depan }}</td>
		<td>{{ $siswa->nama_belakang }}</td>
		<td>{{ $siswa->jenis_kelamin }}</td>
		<td>{{ $siswa->agama }}</td>
		<td>{{ $siswa->alamat }}</td>
	</tr>

	@endforeach
	</table>
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <form action='/siswa/create' method='post'>
      	@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Nama Depan</label>
		    <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan">
		  </div>

		    <div class="form-group">
		    <label for="exampleFormControlInput1">Nama Belakang</label>
		    <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Jenis Kelamain</label>
		    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
		      <option value="L">Laki Laki</option>
		      <option value="P">Perempuan</option>
		    </select>
		  </div>

		    <div class="form-group">
		    <label for="exampleFormControlInput1">Agama</label>
		    <input name="agama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Agama">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
	      <div class="modal-footer">
	      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary">Tambah</button>
      	  </div>
       </form>

    </div>
  </div>
</div>

</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>




