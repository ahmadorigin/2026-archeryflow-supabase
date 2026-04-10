<?php

    require __DIR__ . "/../../src/config/globals.php";
    require '../../src/controllers/functions.php';

    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
    }
 
    // cek apakah tombol submit sudah ditekan atau belum
    if ( isset($_POST["submit"])) {
        // cek apakah data berhasil ditambahkan atau gagal
        if ( add($_POST)) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = '../index.php';
                </script>
                ";
        }
    }

    $page_title = "Add new data";
    $user_name = 'Admin Archery';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data penjualan</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <style>
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

    <?php include "../assets/include/origin_include/header.php"; ?>
    <?php include "../assets/include/origin_include/sidebar.php"; ?>

    <main class="relative top-5  md:ml-64 transition-all duration-300">
        <div class="container mx-auto px-4 py-6">
            <div class="bg-white/5 mb-5 backdrop-blur-sm rounded-xl p-6 border border-white/10">
                <h2 class="text-white text-2xl font-bold">Selamat Datang!</h2>
                <p class="text-white/70 mt-2">Ini adalah konten utama Tambah data Anda.</p>
            </div>

            <div class="bg-white/5 backdrop-blur-sm rounded-xl border border-white/10 p-6 md:p-8">

                <!-- Header Form -->
                <div class="mb-6 pb-4 border-b border-white/10">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">📝</span>
                        <div>
                            <h2 class="text-white text-xl font-bold tracking-tight">
                                Form Tambah Data Penjualan
                            </h2>
                            <p class="text-white/50 text-sm mt-0.5">
                                Lengkapi data pembeli dan produk di bawah ini
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Alert Success -->
                <?php if(isset($_SESSION['success'])): ?>
                <div class="mb-6 p-4 bg-green-500/20 border border-green-500/30 rounded-lg">
                    <p class="text-green-400 flex items-center gap-2">
                        <span>✅</span>
                        <?= $_SESSION['success']; unset($_SESSION['success']); ?>
                    </p>
                </div>
                <?php endif; ?>

                <!-- Alert Error -->
                <?php if(isset($_SESSION['error'])): ?>
                <div class="mb-6 p-4 bg-red-500/20 border border-red-500/30 rounded-lg">
                    <p class="text-red-400 flex items-center gap-2">
                        <span>⚠️</span>
                        <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                    </p>
                </div>
                <?php endif; ?>

                <!-- Form -->
                <?php include "../assets/include/main_add.php"; ?>
            </div>
        </div>
    </main>

    <?php include "../assets/include/origin_include/footer.php"; ?>
    <!-- Script untuk format Rupiah otomatis (opsional) -->
    <script src="../assets/js/format_rupiah_add_page.js"></script>
    <script src="../assets/js/toggle_sidebar.js"></script>
</body>

</html>