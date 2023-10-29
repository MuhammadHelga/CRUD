<?php

require "./connection.php";

class Mtampilan {
    private $database;
    protected $tablename = "biodata";

    public function __construct() {
        $this->database = new connection();
        $this->database = $this->database->mysqli;
    }

    public function setProgramKerja($nomor, $nama, $nim) {
        $nomor = $this->database->real_escape_string($nomor);
        $nama = $this->database->real_escape_string($nama);
        $nim = $this->database->real_escape_string($nim);

        $query = "INSERT INTO $this->tablename (nomor, nama, NIM) VALUES ('$nomor', '$nama', '$nim')";
        return $this->database->query($query);
    }

    public function getAll() {
        $result = $this->database->query("SELECT * FROM $this->tablename");
        $programs = $result->fetch_all(MYSQLI_ASSOC);
        return $programs;
    }

    public function delete($id) {
        $id = $this->database->real_escape_string($id);
        return $this->database->query("DELETE FROM $this->tablename WHERE nomor = '$id'");
    }

    public function update($id, $nama, $NIM) {
        $id = $this->database->real_escape_string($id);
        $nama = $this->database->real_escape_string($nama);
        $NIM = $this->database->real_escape_string($NIM);

        return $this->database->query("UPDATE $this->tablename SET nama = '$nama', NIM = '$NIM' WHERE nomor = '$id'");
    }
}
