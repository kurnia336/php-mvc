<?php 

class Krs extends Controller {
    public function index($id)
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['matkul'] = $this->model('Matkul_model')->getAllMatkul();
        $data['krs'] = $this->model('Krs_model')->getAllKrs($id);
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('krs/index', $data);
        $this->view('templates/footer');
    }

    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Mata Kuliah';
    //     $data['matkul'] = $this->model('Matkul_model')->getMatkulById($id);
    //     $this->view('templates/header', $data);
    //     $this->view('matkul/detail', $data);
    //     $this->view('templates/footer');
    // }

    public function ambil()
    {
        if( $this->model('Krs_model')->ambilDataMatkul($_POST) > 0 ) {
            Flasher::setFlash('Mata Kuliah berhasil', 'diambil', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Mata Kuliah gagal', 'diambil', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    // public function hapus($id)
    // {
    //     if( $this->model('Matkul_model')->hapusDataMatkul($id) > 0 ) {
    //         Flasher::setFlash('Mata Kuliah berhasil', 'dihapus', 'success');
    //         header('Location: ' . BASEURL . '/matkul');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Mata Kuliah gagal', 'dihapus', 'danger');
    //         header('Location: ' . BASEURL . '/matkul');
    //         exit;
    //     }
    // }

    public function getubah()
    {
        echo json_encode($this->model('Matkul_model')->getMatkulById($_POST['id_matkul']));
    }

    public function ubah()
    {
        if( $this->model('Matkul_model')->ubahDataMatkul($_POST) > 0 ) {
            Flasher::setFlash('Mata Kuliah berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        } else {
            Flasher::setFlash('Mata Kuliah gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['matkul'] = $this->model('Matkul_model')->cariDataMatkul();
        $this->view('templates/header', $data);
        $this->view('krs/index', $data);
        $this->view('templates/footer');
    }

}