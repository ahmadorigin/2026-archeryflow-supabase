<?php
 
    require '../src/controllers/functions.php';

    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
    }

    if(isset($_POST["register"])) {
        if (registrasi($_POST) === true) {            
            header("Location: login.php"); 
            exit;
        }
    }
 
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar to ArcheryFlow</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
</head>

<body>

    <!-- Form Register -->
    <h2>Buat Akun Baru</h2>

    <form action="" method="post" class="space-y-4">
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="username" required placeholder="Ahmad Fauzan">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required placeholder="minimal 6 karakter">
        </div>

        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password2" required placeholder="ulangi password">
        </div>

        <button type="submit" name="register">
            Daftar Sekarang
        </button>
    </form>

    <p class="text-center text-gray-400 text-sm mt-6">
        Sudah punya akun?
        <a href="login.php" class="text-indigo-400 hover:text-indigo-300">Masuk di sini</a>
    </p>

</body>

</html>