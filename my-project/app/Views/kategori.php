<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kategori</title>
</head>
<body>
    <h1>Ini halaman kategori</h1>
    <ul>
    <?php
    foreach($kategori as $key => $value){
    ?>
        <li> <a href="/kategori/<?php echo $value ?>"><?php echo $value?></a></li>
    <?php
    }
    ?>
    </ul>
    <a href="/front">Kembali ke home</a>
</body>
</html>