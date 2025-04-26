<?php
require_once 'models/database.php';

class Mahasiswa {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAll() {
        $result = $this->conn->query("SELECT * FROM mahasiswa");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getByNim($nim) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
        $stmt->bind_param("s", $nim);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function insert($data) {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nama, nim, program_studi) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $data['nama'], $data['nim'], $data['prodi']);
        return $stmt->execute();
    }

    public function update($data) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama = ?, program_studi = ? WHERE nim = ?");
        $stmt->bind_param("sss", $data['nama'], $data['prodi'], $data['nim']);
        return $stmt->execute();
    }

    public function delete($nim) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE nim = ?");
        $stmt->bind_param("s", $nim);
        return $stmt->execute();
    }
}
?>
