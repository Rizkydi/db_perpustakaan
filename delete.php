<?php
include 'koneksi.php';

if(isset($_GET['NISN_siswa'])) {
    header('Location: tampilandatasiswa.php');
}

$id_pel = $_GET['NISN_siswa'];

$sql = "DELETE FROM perpustakaan WHERE NISN_siswa='$id_pel'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilandatasiswa.php');
}else{
    header('Location: delete.php?status=gagal');
}
?>