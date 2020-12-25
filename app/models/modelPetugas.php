<?php

class modelPetugas{
    protected $db,
              $tabelpt = 'petugas';

    public function __construct() {
        $this->db = new Database();
    }

    public function getPetugas(){
        $this->db->query("SELECT * FROM " . $this->tabelpt);
        return $this->db->resultSet();
    }   

    public function tambahDataPetugas($data){
        $query = 'INSERT INTO ' . $this->tabelpt . ' VALUES (:id_petugas, :username, :password, :nama_petugas, :level)';
        
        $this->db->query($query);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', md5($data['password']));
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('level', $data['level']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}