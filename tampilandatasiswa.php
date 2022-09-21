<?php 
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Perpustakaan Starbhak Pusaka</title>
    <link rel="stylesheet" href="style-2.css">
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

<div class="table">
<h3>Data Siswa</h3>
    <h4><a href="tambahdata.html">(+) Add New data</a></h4>
    <table border "1">
       
     <tr>
            <th>NISN siswa</th>
            <th>nama siswa</th> 
            <th>TTL siswa</th>
            <th>No telepon</th>
            <th>alamat</th>
            <th>action</th>
        </tr>        
        <?php
       $sql = "SELECT * FROM perpustakaan";
       
       $query = mysqli_query($connect,$sql);
       
       while($pel = mysqli_fetch_array($query)){
           echo "<tr>";
           echo "<td>".$pel['NISN_siswa']."</td>";
           echo "<td>".$pel['nama_siswa']."</td>";
           echo "<td>".$pel['TTL_siswa']."</td>";
           echo "<td>".$pel['No_telepon']."</td>";
           echo "<td>".$pel['Alamat']."</td>";

           echo "<td>";
           echo "<a href='fromedit.php?NISN_siswa=".$pel['NISN_siswa']."'>Edit</a> | ";
           echo "<a href='delete.php?NISN_siswa=".$pel['NISN_siswa']."'>Delete</a>";
           echo "</tr>";
           echo "</td>";
        }
        
        ?> 
</div>

</body>
</html>