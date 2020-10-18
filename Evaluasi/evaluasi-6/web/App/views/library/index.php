<?php 

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: '. BASEURL . "/home");
}

if (!isset($_SESSION['status']) ) {
  header('Location: ' . BASEURL . "/login");
} 


 ?>




<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>

<button type="button" class="btn btn-primary mt-5 mb-3" data-toggle="modal" data-target="#formModal">
  Tambah article +
</button>



<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 mb-5">Daftar Articles</h1>
   
    <ul class="list-group">

      <?php foreach ($data['mhs'] as $mhs) : ?>
        <li class="list-group-item">
          <?= $mhs['nama'];  ?>
              
            <a href="<?= BASEURL; ?>/library/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin ?');">hapus</a>

           <a href="<?= BASEURL; ?>/library/edit/<?= $mhs['id']; ?>" class="badge badge-info float-right ml-1">edit</a>
     

            <a href="<?= BASEURL; ?>/library/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
          </li>
      <?php endforeach; ?>    
    </ul>
  </div>
</div>



<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title tombolTambahData" id="formModalLabel">Insert data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="<?= BASEURL; ?>/library/tambah">

        <input type="hidden" name="id" id="id">

      <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Username" name="nama" required>
      </div>

        <div class="form-group">
    <label for="jenis">Jenis</label>
    <select class="form-control" id="jenis" name="jenis">
      <option value="manga">Manga</option>
      <option value="education">Education</option>
      <option value="motivasi">Motivasi</option>
    </select>
  </div>

      <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" required>
      </div>

    <div class="form-group">
          <label for="deksripsi">Judul</label>
          <input type="text" class="form-control" id="deksripsi" placeholder="Deksripsi" name="deksripsi" required>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
       </form>
      </div>
    </div>
  </div>
</div>

<form method="post" action="" class="container-fluid">
  <input type="submit" name="logout"  value="logout" class="btn btn-info">
</form>
