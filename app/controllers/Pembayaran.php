<?php

class Pembayaran extends Controller{

    public function index() {
        $data['judul'] = 'Entri Pembayaran SPP';
        $data['pembayaran'] = $this->model('modelPembayaran')->getPembayaran();
        $data['petugas'] = $this->model('modelPetugas')->getPetugas();
        $data['siswa'] = $this->model('modelSiswa')->getSiswa();
        $data['spp'] = $this->model('modelSPP')->getSPP();
        $data['kelas'] = $this->model('modelKelas')->getKelas();
        $this->view('templates/header');
        $this->view('pembayaran/index', $data);
        $this->view('templates/footer');
    }
    
    public function entriPembayaran(){
        if ($this->model('modelPembayaran')->entriDataPembayaran($_POST) > 0) {
            header('Location: ' . BASEPATH . '/pembayaran/index');
            exit;
        }
    }
}