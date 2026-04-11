<!-- Demo Card - Penjualan Cash (Versi Tipis) -->
<div class="group cursor-pointer transition-all duration-300 hover:scale-[1.02]">

    <!-- Card dengan background gradien merah - tipis -->
    <div
        class="relative overflow-hidden bg-linear-to-br from-red-900/40 to-red-800/40 backdrop-blur-sm rounded-xl border border-red-500/30 p-4 shadow-md hover:shadow-red-500/25 transition-all duration-300">

        <!-- Efek glow di pojok -->
        <div
            class="absolute -top-10 -right-10 w-24 h-24 bg-red-500/20 rounded-full blur-xl group-hover:bg-red-500/30 transition-all">
        </div>

        <!-- Konten dalam flex row (horizontal) biar lebih hemat tinggi -->
        <div class="flex items-center gap-4">

            <!-- Icon -->
            <div
                class="w-14 h-14 bg-red-500/20 rounded-full flex items-center justify-center shrink-0 group-hover:bg-red-500/30 transition-all duration-300">
                <span class="text-3xl group-hover:scale-110 transition-transform inline-block">🔴</span>
            </div>

            <!-- Informasi Utama -->
            <div class="flex-1">
                <h3 class="text-white font-bold text-lg">Penjualan Cash</h3>
                <p class="text-white/50 text-xs">Pembeli bayar langsung lunas</p>
            </div>

            <!-- Statistik kecil -->
            <div class="text-right">
                <p class="text-white/40 text-[10px]">Hari ini</p>
                <p class="text-white font-bold text-sm">Rp 2.4M</p>
                <p class="text-green-400 text-[10px]">↑ 12%</p>
            </div>

        </div>

        <!-- Tombol aksi di hover (muncul di bawah) -->
        <a href="./pages/add.php?type=cash">
            <div class="mt-3 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <div class="bg-red-500/20 hover:bg-red-500/30 rounded-lg py-1.5 text-center transition-all">
                    <span class="text-white text-xs font-medium">Klik untuk transaksi →</span>
                </div>
            </div>
        </a>

    </div>

</div>

<!-- Demo Card - Penjualan Kredit (Versi Tipis) -->
<div class="group cursor-pointer transition-all duration-300 hover:scale-[1.02]">

    <!-- Card dengan background gradien kuning - tipis -->
    <div
        class="relative overflow-hidden bg-linear-to-br from-yellow-900/40 to-amber-800/40 backdrop-blur-sm rounded-xl border border-yellow-500/30 p-4 shadow-md hover:shadow-yellow-500/25 transition-all duration-300">

        <!-- Efek glow di pojok -->
        <div
            class="absolute -top-10 -right-10 w-24 h-24 bg-yellow-500/20 rounded-full blur-xl group-hover:bg-yellow-500/30 transition-all">
        </div>

        <!-- Konten dalam flex row (horizontal) -->
        <div class="flex items-center gap-4">

            <!-- Icon -->
            <div
                class="w-14 h-14 bg-yellow-500/20 rounded-full flex items-center justify-center shrink-0 group-hover:bg-yellow-500/30 transition-all duration-300">
                <span class="text-3xl group-hover:scale-110 transition-transform inline-block">🟡</span>
            </div>

            <!-- Informasi Utama -->
            <div class="flex-1">
                <h3 class="text-white font-bold text-lg">Penjualan Kredit</h3>
                <p class="text-white/50 text-xs">Pembeli bayar cicilan/utang</p>
            </div>

            <!-- Statistik kecil -->
            <div class="text-right">
                <p class="text-white/40 text-[10px]">Hari ini</p>
                <p class="text-white font-bold text-sm">Rp 1.2M</p>
                <p class="text-yellow-400 text-[10px]">↗ 5%</p>
            </div>

        </div>

        <!-- Tombol aksi di hover (muncul di bawah) -->
        <a href="./pages/add.php?type=kredit">
            <div class="mt-3 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <div class="bg-yellow-500/20 hover:bg-yellow-500/30 rounded-lg py-1.5 text-center transition-all">
                    <span class="text-white text-xs font-medium">Klik untuk transaksi →</span>
                </div>
            </div>
        </a>
    </div>

</div>