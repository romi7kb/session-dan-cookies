<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;    
}
function luas_persegi($si){
        $luas= $si*$si;
        return $luas;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luas persegi</title>
</head>
<body>
<nav><a href="1form.php">halaman1</a>|<a href="2form.php">halaman2</a>|</nav>

    <fieldset>
    <legend>Luas Persegi</legend>
    <form action="" method="get">
    <label for="">Sisi </label>
    <input type="number" min="1" name="s" id="">
    <input type="submit" name="simpan" value="simpan">
    </form>
    <button><a href="logout.php">log out</a></button>
    </fieldset>
<?php
if (isset($_GET['simpan'])) {
    $sisi=$_GET['s'];
    echo "Luas Persegi : ". luas_persegi($sisi);
}
?>
</body>
</html>