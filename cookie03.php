<?php
//  set kadaluarsa satu jam yang lalu
setcookie("username", "", time()-3600);
setcookie("namalengkap", "", time()-3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cookie Berhasil diHapus</h1>
    <h2>Klik <a href='cookie01.php'>di sini </a> untuk membuat cookie</h2>
    <h2>Klik <a href='cookie02.php'>di sini </a> untuk mengecek cookie</h2>
</body>
</html>