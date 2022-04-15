<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataMatkul" data-toggle="modal" data-target="#formModal">
          Tambah Data Mata Kuliah
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/matkul/cari" method="post">
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
          <h3>Daftar Mata Kuliah</h3>
          <ul class="list-group">
            <?php foreach( $data['matkul'] as $matkul ) : ?>
              <li class="list-group-item">
                  <?= $matkul['matkul']; ?>
                  <a href="<?= BASEURL; ?>/matkul/hapus/<?= $matkul['id_matkul']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/matkul/ubah/<?= $matkul['id_matkul']; ?>" class="badge badge-success float-right tampilModalUbahMatkul" data-toggle="modal" data-target="#formModal" data-id="<?= $matkul['id_matkul']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/matkul/detail/<?= $matkul['id_matkul']; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mata Kuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/matkul/tambah" method="post">
          <input type="hidden" name="id_matkul" id="id_matkul">
          <div class="form-group">
            <label for="kode_matkul">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="matkul">Mata Kuliah</label>
            <input type="text" class="form-control" id="matkul" name="matkul" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="sks">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" required>
          </div>

          <div class="form-group">
            <label for="semester">Semester</label>
            <input type="number" class="form-control" id="semester" name="semester" required>
          </div>

          <!-- <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Planologi">Teknik Planologi</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
          </div> -->

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>




