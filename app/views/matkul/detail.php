<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Kode: <?= $data['matkul']['kode_matkul']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['matkul']['matkul']; ?></h6>
        <p class="card-text">Bobot: <?= $data['matkul']['sks']; ?></p>
        <p class="card-text">Semester: <?= $data['matkul']['semester']; ?></p>
        <a href="<?= BASEURL; ?>/matkul" class="card-link">Kembali</a>
      </div>
    </div>

</div>