<?php

class modelSPP{
    protected   $db,
                $tabelspp = 'SPP';
    
    public function __construct(){
        $this->db = new Database();
    }

    public function getSPP(){
        $this->db->query('SELECT * FROM ' . $this->tabelspp);
        return $this->db->resultSet();
    }

    public function tambahDataSPP($data){
        $query = 'INSERT INTO ' . $this->tabelspp . ' VALUES (:id_spp, :tahun, :nominal)';

        $this->db->query($query);
        $this->db->bind('id_spp', $data['id_spp']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }
}