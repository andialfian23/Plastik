<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Logout</title>
</head>

<body>
    <?php
        session_start();
        unset($_SESSION['user']);
        unset($_SESSION['pass']);

        echo "<script>window.alert('Anda Berhasil Keluar!!!')
        window.location=('login.php')</script>";
        ?>
</body>

</html>