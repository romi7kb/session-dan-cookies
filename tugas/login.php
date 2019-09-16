<?php
session_start();
if (isset($_POST['masuk'])) {
    if ($_POST['username'] == "romi" && $_POST['password']=="123") {
    $_SESSION['user'] = $_POST['username'];
    echo "      <script>
			alert('Berhasil Log In!');
			document.location.href = '1form.php';
			</script>
	    ";
    }else {
    echo "<h1>USername / Password yang anda masukkan salah!</h1>";        
    }
}else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<h1>Login.........</h1>
    <form action="" method="post">
    <label for="">Username </label>
    <input type="text" name="username" id="">
    <br>
    <label for="">Password </label>
    <input type="password" name="password" id="">
    <br>
    <button type="submit" name="masuk">Masuk</button>
    </form>
</body>
</html>
<?php
}
?>
