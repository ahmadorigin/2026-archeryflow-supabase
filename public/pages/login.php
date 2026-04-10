<?php

    session_start();
    require '../../src/controllers/functions.php';

    // Cetak: Apakah user sudah login? Kalau belum, cek cookie-nya
    if (isset($_COOKIE["login"])) {

        if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
            $id = $_COOKIE["id"];
            $key = $_COOKIE["key"];

            // ambil username dari id 
            $result = s_query("GET", "/rest/v1/users?id=eq." . $id);

            if (!empty($result)) {
                $row = $result[0];

                // cek cookie dan username
                if ($key === hash('sha256', $row["username"])) {
                    $_SESSION["login"] = true;
                }
            }
        }
    }
    
    if (isset($_SESSION["login"])) {
        header("Location: ../index.php");
        exit;
    }

    if (isset($_POST["login"])) {
        if (login($_POST)) {
            // SETELAH BERHASIL, LANGSUNG PINDAH!
            header("Location: ../index.php"); 
            exit;
        } else {
            $error = true;
        }
    }
 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ArcheryFlow</title>
    <link href="/my-self-project/2026-archeryflow-supabase/public/assets/css/styles.css" rel="stylesheet">
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

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(0, 255, 255, 0.3);
        border-radius: 10px;
    }
    </style>
</head>

<body class="bg-linear-to-br from-gray-900 via-gray-800 to-black min-h-screen flex items-center justify-center p-4">

    <div class="animate-fade-in w-full max-w-md">

        <div
            class="bg-linear-to-br from-cyan-900/40 to-teal-900/40 backdrop-blur-xl rounded-2xl border border-white/20 shadow-2xl shadow-cyan-500/20 p-8 md:p-10">

            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="bg-linear-to-r from-cyan-500 to-teal-500 rounded-full p-4 shadow-lg shadow-cyan-500/25">
                        <span class="text-4xl">🏹</span>
                    </div>
                </div>
                <h2 class="text-white text-2xl md:text-3xl font-bold tracking-tight">
                    Archery Flow
                </h2>
                <p class="text-white/50 text-sm mt-2">
                    Silakan login untuk melanjutkan
                </p>
            </div>

            <form action="" method="post" class="space-y-5">

                <div>
                    <label class="block text-white/80 text-sm font-medium mb-2">
                        👤 Username
                    </label>
                    <input type="text" name="username" required placeholder="Masukkan username"
                        class="w-full px-4 py-3 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/50 transition-all">
                </div>

                <div>
                    <label class="block text-white/80 text-sm font-medium mb-2">
                        🔒 Password
                    </label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required placeholder="Masukkan password"
                            class="w-full px-4 py-3 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/50 transition-all pr-12">
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-white/50 hover:text-white/80 transition-colors">
                            <span id="eye-icon">🔑</span>
                        </button>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <input type="checkbox" name="remember" id="remember"
                        class="mt-1 w-4 h-4 bg-cyan-900/30 border border-white/20 rounded text-cyan-500 focus:ring-cyan-400 focus:ring-2 transition-all cursor-pointer">
                    <label for="remember" class="text-white/70 text-sm cursor-pointer select-none">
                        🔄 Ingat Saya
                    </label>
                </div>

                <?php if(isset($error)) : ?>
                <div class="p-3 bg-red-500/20 border border-red-500/30 rounded-lg animate-pulse">
                    <p class="text-red-400 text-sm flex items-center gap-2">
                        <span>⚠️</span>
                        Username / Password salah!
                    </p>
                </div>
                <?php endif; ?>

                <button type="submit" name="login"
                    class="w-full py-3 bg-linear-to-r from-cyan-600 to-teal-600 hover:from-cyan-500 hover:to-teal-500 text-white font-semibold rounded-lg transition-all duration-200 shadow-lg hover:shadow-cyan-500/25 flex items-center justify-center gap-2 mt-6 transform hover:scale-[1.02]">
                    <span>🚪</span>
                    Masuk ke Dashboard
                </button>
            </form>

            <div class="mt-6 pt-4 border-t border-white/10 text-center">
                <p class="text-white/40 text-xs">
                    © <?= date('Y') ?>
                    <span class="text-cyan-400 font-semibold">amdorigin</span>
                    <span class="mx-1">•</span>
                    Archery Flow System
                </p>
            </div>

        </div>

    </div>

    <script src="../assets/js/toggle_password.js"></script>

</body>

</html>