<?php

class Krs_model
{
    private $table = 'mhs_matkul';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKrs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMatkulById($id)
    {
        // $this->db->query('SELECT a.*, b.matkul FROM ' . $this->table . ' AS a INNER JOIN mata_kuliah AS b WHERE a.id=:id');
        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->query('SELECT a.*, b.* FROM mhs_matkul AS a INNER JOIN mata_kuliah AS b ON a.id_matkul = b.id_matkul WHERE a.id=:id');
        $this->db->bind('id', $id);
        // return $this->db->single();
        return $this->db->resultSet();
    }

    public function ambilDataMatkul($data)
    {
        $query = "INSERT INTO mhs_matkul
                    VALUES
                  (null, :id, :id_matkul, :nilai, :status)";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('id_matkul', $data['id_matkul']);
        $this->db->bind('nilai', '0,0');
        $this->db->bind('status', '0');

        $this->db->execute();

        return $this->db->rowCount();
    }

    // public function hapusDataMatkul($id)
    // {
    //     $query = "DELETE FROM mata_kuliah WHERE id_matkul = :id_matkul";

    //     $this->db->query($query);
    //     $this->db->bind('id_matkul', $id);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }


    // public function ubahDataMatkul($data)
    // {
    //     $query = "UPDATE mata_kuliah SET
    //                 kode_matkul = :kode_matkul,
    //                 matkul = :matkul,
    //                 sks = :sks,
    //                 semester = :semester
    //               WHERE id_matkul = :id_matkul";

    //     $this->db->query($query);
    //     $this->db->bind('kode_matkul', $data['kode_matkul']);
    //     $this->db->bind('matkul', $data['matkul']);
    //     $this->db->bind('sks', $data['sks']);
    //     $this->db->bind('semester', $data['semester']);
    //     $this->db->bind('id_matkul', $data['id_matkul']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }


    // public function cariDataMatkul()
    // {
    //     $keyword = $_POST['keyword'];
    //     $query = "SELECT * FROM mata_kuliah WHERE matkul LIKE :keyword";
    //     $this->db->query($query);
    //     $this->db->bind('keyword', "%$keyword%");
    //     return $this->db->resultSet();
    // }
}
