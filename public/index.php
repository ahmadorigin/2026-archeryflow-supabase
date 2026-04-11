<?php

    require_once '../src/controllers/functions.php';
    require __DIR__ . "/../src/config/globals.php";

    session_start();
    
    // Logika Keamanan: Jika tidak ada session, lempar ke login
    if (!isset($_SESSION["login"])) {
        header("Location: " . $base_url . "/pages/login.php");
        exit; // WAJIB ada agar kode di bawah tidak dijalankan
    }

    if (isset($_GET["cari"])) {
        $rows = search($_GET["keyword"]);
    } else {
        $noData = true;
        $rows = s_query("GET", "/rest/v1/tb_penjualan?select=*&order=id.desc");
    }

    $page_title = "Dashboard";
    $user_name = 'Admin Archery';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Flow</title>
    <link href="<?= $base_url ?>/assets/css/styles.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out;
    }

    /* Custom scrollbar untuk sidebar */
    .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }

    .overflow-y-auto::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: rgba(0, 255, 255, 0.3);
        border-radius: 10px;
    }
    </style>
</head>

<body class="bg-linear-to-br from-gray-900 via-gray-800 to-black">

    <?php include './assets/include/origin_include/header.php'; ?>
    <?php include './assets/include/origin_include/sidebar.php'; ?>

    <main class="relative top-5 md:ml-64 animate-fade-in transition-all duration-300">
        <div class="container mx-auto px-4 py-6 space-y-4">

            <div
                class="bg-linear-to-r from-cyan-900/30 to-teal-900/30 backdrop-blur-sm rounded-xl p-6 border border-white/10">
                <h2 class="text-white text-2xl font-bold">Selamat Datang!</h2>
                <p class="text-white/70 mt-2">Ini adalah konten utama dashboard Anda.</p>
            </div>

            <?php include './assets/include/main_dashboard.php'; ?>

        </div>
    </main>

    <?php include './assets/include/origin_include/footer.php'; ?>
    <script src="<?= $base_url ?>/assets/js/toggle_sidebar.js"></script>
</body>

</html>