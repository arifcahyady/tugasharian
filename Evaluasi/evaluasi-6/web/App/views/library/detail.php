<div class="container mt-5">
	<div class="card" style="width: 40rem;">
	  	<div class="card-body">
		    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
		    <h6 class="card-subtitle mb-2 text-muted"> <?= $data['mhs']['judul']; ?></h6>
		    <h6 class="card-text"><?= $data['mhs']['jenis']; ?></h6>
		     <p class="card-text"><?= $data['mhs']['deksripsi']; ?></p>
		    <a href="<?= BASEURL; ?>/library" class="card-link">Back</a>
  		</div>
	</div>

</div>