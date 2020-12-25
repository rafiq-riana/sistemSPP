<?php

class modelSiswa{
    protected $db,
              $siswa = 'siswa',
              $kelas = 'kelas',
              $spp = 'spp',
              $pembayaran = 'pembayaran';

    public function __construct(){
        $this->db = new Database();
    }

    public function tambahDataSiswa($data){
        // var_dump($data['id_spp']);
        // var_dump($data['id_kelas']);

        // die();
        $query = 'INSERT INTO ' . $this->siswa . ' VALUES (:nisn, :nama, :alamat, :no_telp, :id_kelas, :id_spp)';

        $this->db->query($query);

        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('id_spp', $data['id_spp']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getSiswa(){
        $this->db->query('SELECT s.nisn, s.nama, k.jurusan, k.nama_kelas, sp.nominal, p.jumlah_bayar FROM ' . $this->siswa . ' s JOIN ' . $this->kelas . ' k ON s.id_kelas = k.id_kelas JOIN ' . $this->spp . ' sp ON s.id_spp = sp.id_spp JOIN ' . $this->pembayaran . ' p ON s.nisn = p.nisn');
        return $this->db->resultSet();
    }
}