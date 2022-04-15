<?php

class Matkul_model
{
    private $table = 'mata_kuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatkul()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMatkulById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_matkul=:id_matkul');
        $this->db->bind('id_matkul', $id);
        return $this->db->single();
    }

    public function tambahDataMatkul($data)
    {
        $query = "INSERT INTO mata_kuliah
                    VALUES
                  (null, :kode_matkul, :matkul, :sks, :semester)";

        $this->db->query($query);
        $this->db->bind('kode_matkul', $data['kode_matkul']);
        $this->db->bind('matkul', $data['matkul']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('semester', $data['semester']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMatkul($id)
    {
        $query = "DELETE FROM mata_kuliah WHERE id_matkul = :id_matkul";

        $this->db->query($query);
        $this->db->bind('id_matkul', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMatkul($data)
    {
        $query = "UPDATE mata_kuliah SET
                    kode_matkul = :kode_matkul,
                    matkul = :matkul,
                    sks = :sks,
                    semester = :semester
                  WHERE id_matkul = :id_matkul";

        $this->db->query($query);
        $this->db->bind('kode_matkul', $data['kode_matkul']);
        $this->db->bind('matkul', $data['matkul']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('id_matkul', $data['id_matkul']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMatkul()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mata_kuliah WHERE matkul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
