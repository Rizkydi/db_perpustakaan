<?php 
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $NISN_siswa = $_POST ['NISN_siswa'] ;
    $nama_siswa = $_POST ['nama_siswa'] ;
    $TTL_siswa = $_POST ['TTL_siswa'] ;
    $No_telepon = $_POST ['No_telepon'] ;
    $Alamat = $_POST ['Alamat'] ;


    $sql = "INSERT INTO perpustakaan (NISN_siswa, nama_siswa, TTL_siswa, No_telepon, Alamat) VALUES('$NISN_siswa','$nama_siswa','$TTL_siswa','$No_telepon','$Alamat')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilandatasiswa.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?>

