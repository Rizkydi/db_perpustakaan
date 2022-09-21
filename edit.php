<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

$NISN_siswa = $_POST ['NISN_siswa'];
$nama_siswa = $_POST ['nama_siswa'];
$TTL_siswa = $_POST ['TTL_siswa'];
$No_telepon = $_POST['No_telepon'];
$Alamat = $_POST['Alamat']; 

$sql ="UPDATE perpustakaan SET NISN_siswa='$NISN_siswa', nama_siswa ='$nama_siswa', TTL_siswa ='$TTL_siswa', No_telepon='$No_telepon' Alamat='$Alamat'  WHERE NISN_siswa = '$NISN_siswa'";

$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilandatasiswa.php');
}else{
    header('Location: edit.php?status=gagal');
}
}

?>