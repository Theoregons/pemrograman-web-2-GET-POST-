<?php

$mahasiswa = [
    [
        "nim" => "23501122",
        "nama" => "Baktiar",
        "jurusan" => "Teknik Informasi",
        "email" => "baktiar@gmail.com",
        "img" =>  "img1.png"
    ],
    [
        "nim" => "23501120",
        "nama" => "Dika",
        "jurusan" => "Teknologi Informasi",
        "email" => "Dika@stimata.ac.id",
        "img" =>  "img2.jpg"
    ],
    [
        "nim" => "23501121",
        "nama" => "Bintang",
        "jurusan" => "Teknologi Informasi",
        "email" => "Bintang@stimata.ac.id",
        "img" =>  "img3.jpg"
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?php echo $mhs['nama']; ?>&nim=<?php echo $mhs['nim']; ?>&jurusan=<?php echo $mhs['jurusan']; ?>&email=<?php echo $mhs['email']; ?>&img=<?php echo $mhs['img']; ?>" > <?php echo $mhs['nama']; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html> 
