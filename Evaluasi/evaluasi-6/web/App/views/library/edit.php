<form method="post" action="<?= BASEURL; ?>/library/ubah">

        <input type="hidden" name="id" id="id" value="<?= $data['get']['id'] ?>">

      <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Username" name="nama" required value="<?= $data['get']['nama'] ?>">
      </div>

        <div class="form-group">
    <label for="jenis">Jenis</label>
    <select class="form-control" id="jenis" name="jenis" value="<?= $data['get']['jenis'] ?>">
      <option value="manga">Manga</option>
      <option value="education">Education</option>
      <option value="motivasi">Motivasi</option>
    </select>
  </div>

      <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" required value="<?= $data['get']['judul'] ?>">
      </div>

     <div class="form-group">
          <label for="judul">Deksripsi</label>
          <input type="text" class="form-control" id="deksripsi" placeholder="Deksripsi" name="deksripsi" required value="<?= $data['get']['deksripsi'] ?>">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
       </form>