<?php
include "koneksi.php";
$id = $_GET['id'];

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];

$sql = $pdo->prepare("UPDATE mahasiswa SET nim=:nim, nama=:nama, angkatan=:angkatan WHERE nim=:id");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':angkatan', $angkatan);
$sql->bindParam(':id', $id);
$execute = $sql->execute();

if($execute) {
    echo "<script>window.location.href='index.php';</script>";
    exit();
} else {
    echo "<a href='index.php'>back</a>";
}
?>