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
    <link rel="stylesheet" href="style-tampilandatasiswa.css">
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
    <div class="container-2">
        <h2>Perpustakaan SMK Taruna Bhakti</h2>
    </div>
    <div class="list-sidebar">
        <ul>
            <li><a href="tampilandatasiswa.php">Data Siswa</a></li>
            <li><a href="tampilandatabuku.php">Data Buku</a></li>
        </ul>
<div class="table">
<h3>Data Siswa</h3>
    <h4><a href="tambahdata.html">(+) Add New data</a><br class="br">Data Siswa</br></h4>
    <table border "1" cellpadding="15">
       
     <tr>
            <th>NISN siswa</th>
            <th>nama siswa</th> 
            <th>TGL Peminjaman</th>
            <th>No telepon</th>
            <th>TGL Pengembalian</th>
            <th>action</th>
        </tr>        
        <?php
       $sql = "SELECT * FROM perpustakaan";
       
       $query = mysqli_query($connect,$sql);
       
       while($pel = mysqli_fetch_array($query)){
           echo "<tr>";
           echo "<td>".$pel['NISN_siswa']."</td>";
           echo "<td>".$pel['nama_siswa']."</td>";
           echo "<td>".$pel['TGL_Peminjaman']."</td>";
           echo "<td>".$pel['No_telepon']."</td>";
           echo "<td>".$pel['TGL_Pengembalian']."</td>";

           echo "<td>";
           echo "<a href='fromedit.php?NISN_siswa=".$pel['NISN_siswa']."'> <input type='button' class='btn-edit'> </a> | ";
           echo "<a href='delete.php?NISN_siswa=".$pel['NISN_siswa']."'> <input type='button' class='btn-delete'> </a>";
           echo "</tr>";
           echo "</td>";
        }
        
        ?> 
</div>

</body>
</html>