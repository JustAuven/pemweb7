<?php
require_once 'controllers/MahasiswaController.php';

$controller = new MahasiswaController();

$page = $_GET['page'] ?? 'index';

switch ($page) {
    case 'index':
        $controller->index();
        break;
    case 'tambah':
        $controller->tambah();
        break;
    case 'edit':
        $nim = $_GET['nim'];
        $controller->edit($nim);
        break;
    case 'hapus':
        $nim = $_GET['nim'];
        $controller->hapus($nim);
        break;
    default:
        echo "Halaman tidak ditemukan!";
        break;
}
?>
