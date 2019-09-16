<?php
$value = 'romi';
$value2 = 'Romi Ramdhani';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);
// kadaluarsa 1 jam
echo "<h1>ini halaman pengesetan cookie</h1>";
