<?php
session_start();
require_once 'function.php';
if (isset($_SESSION['username']) != "") {
    header('location:dashboard.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="card">
        <h1 class="mb-20 text-center text-primary">FORM LOGIN</h1>
        <p class="text-center mb-10">login to get your session</p>
        <form action="aksilogin.php" method="post">
            <input type="text" name="username" class="form-control mb-20" placeholder="Masukan Username"><br>
            <input type="password" name="password" class="form-control mb-20" placeholder="Masukan Password"><br>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_SESSION['pesan'])) : ?>
        <script>
            Swal.fire(
                'Opps ?',
                `<?= flashdata(); ?>`,
                'error'
            )
        </script>
    <?php endif; ?>
</body>

</html>