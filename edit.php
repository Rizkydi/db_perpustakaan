<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {

$NISN_siswa = $_POST ['NISN_siswa'];
$nama_siswa = $_POST ['nama_siswa'];
$TGL_Peminjaman = $_POST ['TGL_Peminjaman'];
$No_telepon = $_POST['No_telepon'];
$TGL_Pengembalian = $_POST['TGL_Pengembalian']; 

$sql ="UPDATE perpustakaan SET NISN_siswa='$NISN_siswa', nama_siswa ='$nama_siswa', TGL_Peminjaman ='$TGL_Peminjaman', No_telepon='$No_telepon', TGL_Pengembalian='$TGL_Pengembalian'  WHERE NISN_siswa = '$NISN_siswa'";

$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilandatasiswa.php');
}else{
    header('Location: edit.php?status=gagal');
}
}

?>