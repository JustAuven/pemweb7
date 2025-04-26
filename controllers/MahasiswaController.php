<?php
require_once __DIR__ . '/../models/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct() {
        $this->model = new Mahasiswa();
    }

    public function index() {
        $data = $this->model->getAll();
        require 'views/index.php';
    }

    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->model->insert($_POST)) {
                header('Location: index.php');
                exit;
            } else {
                echo "Gagal tambah data!";
            }
        }
        require 'views/tambah.php';
    }

    public function edit($nim) {
        $mhs = $this->model->getByNim($nim);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->model->update($_POST)) {
                header('Location: index.php');
                exit;
            } else {
                echo "Gagal update data!";
            }
        }
        require 'views/update.php';
    }

    public function hapus($nim) {
        if ($this->model->delete($nim)) {
            header('Location: index.php');
            exit;
        } else {
            echo "Gagal hapus data!";
        }
    }
}
?>
