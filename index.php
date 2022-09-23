<?php 
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbhak Pusaka</title>
    <style>
        <?php 
        include 'style-index.css'
        ?>
    </style>
    <link rel="stylesheet" href="style-index.css">
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
    <!-- untuk menu sidebar content -->
    <div class="list-sidebar">
        <ul>
            <li><a href="tampilandatasiswa.php">Data Siswa</a></li>
            <li><a href="tampilandatabuku.php">Data Buku</a></li>
        </ul> 
    </div>
</body>
</html>