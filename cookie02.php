<?php
if (isset($_COOKIE['username'])) {
    echo "<h1>Username ada isinya :". $_COOKIE['username']."</h1>";
}else {
    echo "<h1>Cookie 'username' tidak ada</h1>";
}
if (isset($_COOKIE['namalengkap'])) {
    echo "<h1>namalengkap ada isinya :". $_COOKIE['namalengkap']."</h1>";
}else {
    echo "<h1>Cookie 'namalengkap' tidak ada</h1>";
}
echo "<h2>Klik <a href='cookie01.php'>di sini </a> untuk membuat cookie</h2>";
echo "<h2>Klik <a href='cookie03.php'>di sini </a> untuk menghapus cookie</h2>";