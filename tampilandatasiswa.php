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
</head>
<body>
<h3>Data Siswa</h3>
    <h4><a href="index.html">(+) Add New data</a></h4>
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
           echo "<a href='hapus.php?NISN_siswa=".$pel['NISN_siswa']."'>Hapus</a>";
           echo "</tr>";
           echo "</td>";
        }
        ?> 
       
</body>
</html>