<!-- Overlay backdrop (agar bisa tutup sidebar daril luar) -->
<div id="sidebar-overlay"
    class="fixed inset-0 bg-black/50 backdrop-blur-sm z-30 hidden md:hidden transition-all duration-300"></div>

<!-- components/sidebar.php -->
<aside id="sidebar"
    class="fixed left-0 top-16 w-64 h-[calc(100vh-4rem)] z-40 transition-transform duration-300 -translate-x-full md:translate-x-0">

    <!-- Glassmorphism Background dengan lienar & Glow -->
    <div
        class="relative w-full h-full bg-lienar-to-b from-cyan-900/70 via-cyan-800/60 to-cyan-900/70 backdrop-blur-xl border-r border-white/10 shadow-[0_4px_30px_rgba(0,255,255,0.15)] overflow-y-auto">

        <!-- Overlay Glass Tipis (pseudo-element style dengan div) -->
        <div class="absolute inset-0 bg-lienar-to-t from-white/5 to-transparent pointer-events-none"></div>

        <!-- Konten Sidebar (relative agar di atas overlay) -->
        <div class="relative flex flex-col h-full p-4 gap-4">

            <!-- Bagian Atas: Logo / Nama Aplikasi -->
            <div class="flex items-center justify-center py-3">
                <h2 class="text-2xl font-bold text-white drop-shadow-[0_0_8px_rgba(0,255,255,0.5)] tracking-wide">
                    🏹 Archery Flow
                </h2>
            </div>

            <!-- Divider -->
            <div class="border-t border-white/10"></div>

            <!-- Menu Navigasi Utama -->
            <nav class="flex-1 space-y-1">
                <!-- Menu Item: Dashboard -->
                <a href="<?= $base_url ?>/index.php"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg text-white/80 hover:text-white hover:bg-white/10 transition-all duration-200 group">
                    <span class="text-xl">📊</span>
                    <span class="font-medium">Dashboard</span>
                    <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">🌙</span>
                </a>

                <!-- Menu Item: Data Penjualan -->
                <a href="<?= $base_url ?>/pages/main_table.php"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg text-white/80 hover:text-white hover:bg-white/10 transition-all duration-200 group">
                    <span class="text-xl">📈</span>
                    <span class="font-medium">Data Penjualan</span>
                    <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">🌙</span>
                </a>

                <!-- Menu Item: Tambah Data -->
                <a href="<?= $base_url ?>/pages/add.php"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg text-white/80 hover:text-white hover:bg-white/10 transition-all duration-200 group">
                    <span class="text-xl">➕</span>
                    <span class="font-medium">Tambah Data</span>
                    <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">🌙</span>
                </a>
            </nav>

            <!-- Spacer untuk mendorong logout ke bawah -->
            <div class="flex-1"></div>

            <!-- Divider sebelum logout -->
            <div class="border-t border-white/10"></div>

            <!-- Bagian Bawah: Logout -->
            <div class="space-y-1">
                <a href="logout.php"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg text-red-300/80 hover:text-red-300 hover:bg-red-500/20 transition-all duration-200 group">
                    <span class="text-xl">🚪</span>
                    <span class="font-medium">Logout</span>
                    <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">⚠️</span>
                </a>
            </div>

        </div>
    </div>
</aside>

<!-- Catatan: Sidebar akan muncul dengan animasi slide di mobile -->