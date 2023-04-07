<?php
require 'fungsi.php';
$apa = mysqli_query($conn, "SELECT * FROM biodata");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="built.php">
    <link rel="shortcut icon" href="img/gambar1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title> BIODATA </title>
</head>
<header>
    <div class="judul">
        <h1>Rumah Kita</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Biodata.php">Biodata</a></li>
        </ul>
    </div>
</header>
<body class="bio">
    <h1> Biodata </h1>
    
    <table border = "1">
        <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Tempat/ tgl lahir </th>
            <th> No Handphone</th>
            <th> Instagram </th>
            <th> Foto</th>
        </tr>

        <?php $i = 1; ?> 
        <?php foreach ($apa as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["nama"];?></td>
                <td><?php echo $row["tempat/ tgl lahir"];?></td>
                <td><?php echo $row["no handphone"];?></td>
                <td><?php echo $row["instagram"];?></td>
                <td><img src="img/<?php echo $row["foto"];?>"width="100"></td>
             </tr>
            <?php $i++;?>
            <?php endforeach ?>

    </table>
</body>
<footer>
<div class="instagram">
    <a href="https://www.instagram.com/fauzanrfq_/"><i class="fa-brands fa-instagram"></i></a>
</div>
    <p>fauzanrifqi1004@gmail.com</p>
    <p>&copy Website Rumah Kita<script>document.write(new Date().getFullYear())</script></p>
</footer>
</html>