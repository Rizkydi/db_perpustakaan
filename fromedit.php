<?php
include 'koneksi.php';

$NISN_siswa =$_GET['NISN_siswa'];
$sql = "SELECT * FROM perpustakaan WHERE NISN_siswa='$NISN_siswa'";
$query = mysqli_query($connect,$sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak di temukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Perpustakaan Starbhak Pusaka</title>
    <link rel="stylesheet" href="style-4.css">
    <!-- font inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
</head>
<body>
             <!-- untuk menu head -->
             <div class="container">
        <h2>Starbhak Pustaka</h2>

        <img src="Hero.png" alt="">
    </div>
    <div class="list-sidebar">
        <ul>
            <li><a href="tampilandatasiswa.php">Data Siswa</a></li>
            <li><a href="">Data Peminjaman Buku</a></li>
            <li><a href="">Data Pengembalian Buku</a></li>
        </ul>
    <!-- untuk menu bottom -->
        <h2>Starbhak Pustaka</h2>
        <h4>From SMK Taruna Bhakti</h4>
    </div>

    <form action="edit.php" method="post">
<h3>edit data </h3>
<p><label>NISN siswa : <input  value="<?php echo $pel['NISN_siswa']?>" required="required" type="hidden" name="NISN_siswa"></label></p>
<p><label>nama siswa : <input value="<?php echo $pel['nama_siswa']?>" required="required" type="text" name="nama_siswa"></label></p>
<p><label>TTL_siswa : <input value="<?php echo $pel['TTL_siswa']?>" required="required" type="text" name="TTL_siswa"></label></p>
<p><label>No_telepon : <input value="<?php echo $pel['No_telepon']?>" required="required" type="number" name="No_telepon"></label></p>
<p><label>Alamat: <input value="<?php echo $pel['Alamat']?>" required="required" type="text" name="Alamat"></label></p>
<input type="submit" name="simpan" value="simpan">
</form>
