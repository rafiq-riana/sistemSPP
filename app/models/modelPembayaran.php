<?php

class modelPembayaran{
    protected $db,
              $pembayaran = 'pembayaran',
              $siswa = 'siswa',
              $petugas = 'petugas',
              $spp = 'spp';

    public function __construct(){
        $this->db = new Database();
    }

    public function entriDataPembayaran($data){
        
        $query = 'INSERT INTO ' . $this->pembayaran . ' VALUES (:id_pembayaran, :id_petugas, :nisn, :tgl_bayar, :bulan_dibayar, :tahun_dibayar, :id_spp, :jumlah_bayar)';

        $this->db->query($query);

        $this->db->bind('id_pembayaran', $data['id_pembayaran']);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('tgl_bayar', $data['tgl_bayar']);
        $this->db->bind('bulan_dibayar', $data['bulan_dibayar']);
        $this->db->bind('tahun_dibayar', $data['tahun_dibayar']);
        $this->db->bind('id_spp', $data['id_spp']);
        $this->db->bind('jumlah_bayar', $data['jumlah_bayar']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getPembayaran(){
        $this->db->query('SELECT s.nisn, s.nama, sp.nominal, p.jumlah_bayar FROM ' . $this->pembayaran . ' p JOIN ' . $this->siswa . ' s ON p.nisn = s.nisn JOIN ' . $this->spp . ' sp ON p.id_spp = sp.id_spp');
        return $this->db->resultSet();
    }
}