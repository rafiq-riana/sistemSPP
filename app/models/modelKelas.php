<?php

class modelKelas {

    protected $db,
              $tabelkls = 'kelas';

    public function __construct(){
        $this->db = new Database();
    }

    public function getKelas(){
        $this->db->query("SELECT * FROM " . $this->tabelkls);
        return $this->db->resultSet();
    }

    public function getKelasById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tabelkls . ' WHERE id_kelas=:id_kelas');
        $this->db->bind('id_kelas', $id);
        return $this->db->single();
    }

    public function tambahDataKelas($data){

        $query = 'INSERT INTO ' . $this->tabelkls . ' VALUES (:id_kelas, :nama_kelas, :jurusan)';

        $this->db->query($query);

        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('nama_kelas', $data['nama_kelas']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataKelas($data){

        $query = 'UPDATE ' . $this->tabelkls . ' SET nama_kelas = :nama_kelas, jurusan = :jurusan WHERE id_kelas = :id_kelas';

        $this->db->query($query);

        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('nama_kelas', $data['nama_kelas']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

}