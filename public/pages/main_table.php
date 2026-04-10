<?php
 
    require __DIR__ . "/../../src/config/globals.php";
    require "../../src/controllers/functions.php";

    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: " . $base_url . "/pages/login.php");
    }

    if (isset($_GET["cari"])) {
        $rows = search($_GET["keyword"]);
    } else {
        // Ambil semua data seperti biasa jika tidak sedang mencari
        $noData = true;
        $rows = s_query("GET", "/rest/v1/tb_penjualan?select=*&order=id.desc");
    }

    $page_title = "Main Table";
    $user_name = 'Admin Archery';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Flow</title>
    <link href="<?= $base_url ?>/assets/css/styles.css" rel="stylesheet">
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

    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.3);
    }
    </style>
</head>

<body class="bg-linear-to-br from-gray-900 via-gray-800 to-black">

    <?php include "../assets/include/origin_include/header.php"; ?>
    <?php include "../assets/include/origin_include/sidebar.php"; ?>

    <main class="relative top-5 md:ml-64 animate-fade-in transition-all duration-300">
        <div class="container mx-auto px-4 py-6">
            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10">
                <h2 class="text-white text-2xl font-bold">Selamat Datang!</h2>
                <p class="text-white/70 mt-2">Ini adalah konten utama Main table Anda.</p>
            </div>

        </div>
    </main>

    <?php include '../assets/include/main_table_content.php'; ?>

    <!-- Overlay untuk form verifikasi password -->
    <div class="h-[50vh]">
        <?php include '../assets/include/mymodal_main_table.php'; ?>
    </div>

    <?php include '../assets/include/origin_include/footer.php'; ?>

    <script src="../assets/js/open_modal.js"></script>
    <script src="../assets/js/toggle_sidebar.js"></script>
</body>

</html>