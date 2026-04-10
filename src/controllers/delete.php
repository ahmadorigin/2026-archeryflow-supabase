<?php

    require 'functions.php';

    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: ../../public/pages/login.php");
    }

    $id = $_GET["id"];

    if (delete($id)) {
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = '../../public/index.php';
            </script>
        ";
    }