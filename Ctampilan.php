<?php

include_once("Mtampilan.php");

class Ctampilan
{
    public $model;

    public function __construct() {
        $this->model = new Mtampilan();
    }

    public function invoke() { 
        $biodata = $this->model->getAll();
        include 'Vtampilan.php';
    }

    public function insert($nomor, $nama, $nim) {
        $this->model->setProgramKerja($nomor, $nama, $nim);
        header('Location: ' . "index.php");
    }

    public function deleteAction($num) {
        $this->model->delete($num);
        header('Location: ' . "index.php");
    }

    public function updateAction($num, $nama, $NIM) {
        $this->model->update($num, $nama, $NIM);
        header('Location: ' . "index.php");
        
    }
}
