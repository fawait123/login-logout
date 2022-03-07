<?php
session_start();

if ($_SESSION['username'] == "") {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?></h1>
    <p>Email : <?php echo $_SESSION['email'] ?></p>
    <br>
    <br>
    <a href="logout.php">Logout</a>
</body>

</html>