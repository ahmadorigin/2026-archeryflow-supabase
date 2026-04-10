<?php

    require '../src/controllers/functions.php';

    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: " . $base_url . "/pages/login.php");
        exit;
    }

    $id = $_GET["id"];

    if (delete($id)) {
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = './pages/main_table.php';
            </script>
        ";
    }