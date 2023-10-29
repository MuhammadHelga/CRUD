<?php
session_start();
include_once("Ctampilan.php");

$controller = new Ctampilan();
    if (isset($_GET['add'])) {
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $nim = $_POST['NIM'];
        $controller->insert($nomor, $nama, $nim);
    } elseif (isset($_GET['edit'])) {
        $num = $_GET['edit'];
        $nama = $_POST['nama'];
        $NIM = $_POST['NIM'];
        $controller->updateAction($num, $nama, $NIM);
    } elseif (isset($_GET['delete'])) {
        $nomor = $_GET['delete'];
        $controller->deleteAction($nomor);
    } else {
        $controller->invoke();
    }
?>
