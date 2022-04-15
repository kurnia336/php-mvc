<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
        <p class="card-text"><?= $data['mhs']['email']; ?></p>
        <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>
  <hr>
    <div class="row">
        <div class="col-lg-6">
          <h4>Daftar Mata Kuliah Terambil</h4>
          <?php foreach( $data['krs'] as $krs ) : ?>
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Kode: <?= $krs['kode_matkul']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $krs['matkul']; ?></h6>
                <p class="card-text">Nilai: <?= $krs['nilai']; ?></p>
                <p class="card-text">Status: <?php echo ($krs['status'] == '0') ? 'Belum Dinilai' : 'Sudah Dinilai/Tidak bisa diedit lagi'; ?></p>
                <!-- <a href="<?= BASEURL; ?>/matkul" class="card-link">Kembali</a> -->
              </div>
            </div>
          <?php endforeach; ?>   
        </div>
    </div>
    
</div>