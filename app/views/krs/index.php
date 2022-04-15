<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <?php
      
    ?>
    <div class="row mb-3">
      <div class="col-lg-6">
        <!-- <button type="button" class="btn btn-primary tombolTambahDataMatkul" data-toggle="modal" data-target="#formModal">
          Tambah Data Mata Kuliah
        </button> -->
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/krs/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari mata kuliah.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Mata Kuliah Tersedia</h3>
          <ul class="list-group">
            <?php foreach( $data['matkul'] as $matkul ) : ?>
              <li class="list-group-item">
                  <?= $matkul['matkul']; ?>
                  <!-- <a href="<?= BASEURL; ?>/matkul/hapus/<?= $matkul['id_matkul']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a> -->
                  <form action="<?= BASEURL; ?>/krs/ambil/<?= $matkul['id_matkul']; ?>" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $data['mhs']['id']; ?>">
                    <input type="hidden" name="id_matkul" id="id_matkul" value="<?= $matkul['id_matkul']; ?>">
                    <button type="submit" class="btn btn-primary float-right">Ambil</button>
                  </form>
                  <!-- <a href="" class="badge badge-success float-right tampilModalUbahMatkul" data-toggle="modal" data-target="#formModal" data-id="<?= $matkul['id_matkul']; ?>">ambil</a> -->
                  <!-- <a href="<?= BASEURL; ?>/matkul/detail/<?= $matkul['id_matkul']; ?>" class="badge badge-primary float-right">detail</a> -->
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>