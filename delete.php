<?php
include "koneksi.php";
$id = $_GET['id'];

$sql = $pdo->prepare("DELETE FROM mahasiswa WHERE nim=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute();

if($execute) {
    echo "<script>window.location.href='index.php';</script>";
    exit();
} else {
    echo "<a href='index.php'>back</a>";
}
?>