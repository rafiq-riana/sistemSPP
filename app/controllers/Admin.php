<?php

class Admin extends Controller {

    public function siswa() {
        $data['judul'] = 'Tabel Data Siswa';
        $data['siswa'] = $this->model('modelSiswa')->getSiswa();
        $data['spp'] = $this->model('modelSPP')->getSPP();
        $data['kelas'] = $this->model('modelKelas')->getKelas();
        $this->view('templates/header');
        $this->view('admin/siswa', $data);
        $this->view('templates/footer');
    }

    public function tambahSiswa(){
        if ($this->model('modelSiswa')->tambahDataSiswa($_POST) > 0) {
            header('Location: ' . BASEPATH . '/admin/siswa');
            exit;
        }
    }

    public function petugas() {
        $data['judul'] = 'Tabel Data Petugas';
        $data['petugas'] = $this->model('modelPetugas')->getPetugas();
        $this->view('templates/header');
        $this->view('admin/petugas', $data);
        $this->view('templates/footer');
    }

    public function tambahPetugas(){
        if ($this->model('modelPetugas')->tambahDataPetugas($_POST) > 0) {
            header('Location: ' . BASEPATH . '/admin/petugas');
            exit;
        }
    }

    public function spp() {
        $data['judul'] = 'Tabel Data SPP';
        $data['SPP'] = $this->model('modelSPP')->getSPP();
        $this->view('templates/header');
        $this->view('admin/spp', $data);
        $this->view('templates/footer');
    }

    public function tambahSPP(){
        if ($this->model('modelSPP')->tambahDataSPP($_POST) > 0) {
            header('Location: ' . BASEPATH . '/admin/SPP');
            exit;
        }
    }

    public function kelas() {
        $data['judul'] = 'Tabel Data Kelas';
        $data['kelas'] = $this->model('modelKelas')->getKelas();
        $this->view('templates/header');
        $this->view('admin/kelas', $data);
        $this->view('templates/footer');
    }

    public function tambahKelas(){
        if ($this->model('modelKelas')->tambahDataKelas($_POST) > 0) {
            header('Location: ' . BASEPATH . '/admin/kelas');
            exit;
        }
    }

    public function getEditKelas(){
        // echo json_encode($this->model('modelKelas')->getKelas($_POST['id']));

        echo json_encode($this->model('modelKelas')->getKelasById((int) $_POST['id']));

        // echo $_POST['id'];

    }

    public function editKelas(){
        if ($this->model('modelKelas')->editDataKelas($_POST) > 0) {
            header('Location: ' . BASEPATH . '/admin/kelas');
            exit;
        }
    }

}