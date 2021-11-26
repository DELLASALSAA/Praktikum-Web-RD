<html>
<body>
<?php
include "koneksi.php";
$id = $_GET['id'];

$sql = $pdo->prepare('SELECT * FROM mahasiswa Where nim=:id');
$sql->bindParam(':id',$id);
$sql->execute();
$data = $sql->fetch();
?>

<form method ="post" action="ubah.php"?id=<?php echo $id; ?>">
    <table cellpadding = "5">
        <tr>
            <td>NIM</td>
            <td><input type="number" name="nim" value="<?php echo $data['nim']; ?>"></td>
      </tr>
      <tr>
            <td>nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
      <tr>
            <td>angkatan</td>
            <td><input type="number" name="angkatan" value="<?php echo $data['angkatan']; ?>"></td>
      </tr>
    </table>
<hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>