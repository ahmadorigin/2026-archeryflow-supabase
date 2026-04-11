<div
    class="bg-linear-to-r from-cyan-900/30 to-teal-900/30 backdrop-blur-sm rounded-xl border border-white/10 p-6 md:p-8">

    <!-- Form -->
    <form action="" method="post" class="space-y-4">
        <!-- Grid Layout untuk form fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Tanggal -->
            <div>
                <label for="date" class="block text-white/80 text-sm font-medium mb-2">
                    📅 Tanggal Transaksi <span class="text-red-400">*</span>
                </label>
                <input type="date" name="date" id="date" required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <?php if(isset($type)) : ?>
            <?php if($type === "kredit") : ?>
            <div>
                <label for="due-date" class="block text-white/80 text-sm font-medium mb-2">
                    📅 Jatuh Tempo <span class="text-red-400">*</span>
                </label>
                <input type="date" name="due-date" id="due-date" required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Nama Pembeli -->
            <?php if(isset($type)) : ?>
            <div>
                <label for="nama-pembeli" class="block text-white/80 text-sm font-medium mb-2">
                    👤 Nama Pembeli <span class="text-red-400">*</span>
                </label>
                <input type="text" name="nama-pembeli" id="nama-pembeli"
                    placeholder="<?= ($type == 'kredit') ? 'Wajib isi nama penghutang' : 'Nama lengkap pembeli...'; ?>"
                    required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>
            <?php else : ?>
            <div>
                <label for="nama-pembeli" class="block text-white/80 text-sm font-medium mb-2">
                    👤 Nama Pembeli <span class="text-red-400">*</span>
                </label>
                <input type="text" name="nama-pembeli" id="nama-pembeli" placeholder="Nama lengkap pembeli..." required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>
            <?php endif; ?>

            <!-- Email -->
            <div>
                <label for="email" class="block text-white/80 text-sm font-medium mb-2">
                    ✉️ Email
                </label>
                <input type="email" name="email" id="email" placeholder="johndoe@example.com"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Alamat Lengkap -->
            <div>
                <label for="alamat" class="block text-white/80 text-sm font-medium mb-2">
                    📍 Alamat Lengkap <span class="text-red-400">*</span>
                </label>
                <input type="text" name="alamat" id="alamat" placeholder="Jepang, Tokyo..." required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Kode Produk -->
            <div>
                <label for="kode-produk" class="block text-white/80 text-sm font-medium mb-2">
                    🏷️ Kode Produk
                </label>
                <input type="text" name="kode-produk" id="kode-produk" placeholder="000.0000"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Nama Produk -->
            <div>
                <label for="nama-produk" class="block text-white/80 text-sm font-medium mb-2">
                    🎯 Nama Produk <span class="text-red-400">*</span>
                </label>
                <input type="text" name="nama-produk" id="nama-produk" placeholder="Turkhis..." required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Warna -->
            <div>
                <label for="warna" class="block text-white/80 text-sm font-medium mb-2">
                    🎨 Warna
                </label>
                <input type="text" name="warna" id="warna" placeholder="Navy..."
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Draw Weight -->
            <div>
                <label for="draw-weight" class="block text-white/80 text-sm font-medium mb-2">
                    ⚡ Draw Weight
                </label>
                <input type="text" name="draw-weight" id="draw-weight" placeholder="00 Ibs"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Harga -->
            <div>
                <label for="harga" class="block text-white/80 text-sm font-medium mb-2">
                    💰 Harga
                </label>
                <input type="number" name="harga" id="harga" min="0" placeholder="3000000"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Ongkir -->
            <div>
                <label for="ongkir" class="block text-white/80 text-sm font-medium mb-2">
                    🚚 Ongkir
                </label>
                <input type="number" name="ongkir" id="ongkir" min="0" placeholder="200000"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- dp uang muka -->
            <?php if(isset($type)) : ?>
            <?php if($type === "kredit") : ?>
            <div>
                <label for="dp" class="block text-white/80 text-sm font-medium mb-2">
                    ⚖️ Uang Muka (DP)
                </label>
                <input type="number" name="dp" id="dp" min="0" placeholder="50000" required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Status -->
            <input type="hidden" name="status" value="<?= $status_awal ?>">

        </div>

        <!-- Tombol Aksi -->
        <div class="flex flex-col sm:flex-row gap-3 pt-4 mt-2 border-t border-white/10">
            <button type="submit" name="submit"
                class="px-6 py-2.5 bg-linear-to-r from-cyan-600 to-teal-600 hover:from-cyan-500 hover:to-teal-500 text-white font-medium rounded-lg transition-all duration-200 shadow-lg hover:shadow-cyan-500/25 flex items-center justify-center gap-2">
                <span>💾</span>
                Simpan Data
            </button>

            <button type="reset"
                class="px-6 py-2.5 bg-white/5 hover:bg-white/10 text-white/70 hover:text-white rounded-lg transition-all duration-200 flex items-center justify-center gap-2 border border-white/10">
                <span>🔄</span>
                Reset Form
            </button>

            <a href="../index.php"
                class="px-6 py-2.5 bg-white/10 hover:bg-white/20 text-white/80 hover:text-white rounded-lg transition-all duration-200 flex items-center justify-center gap-2 border border-white/10">
                <span>←</span>
                Kembali ke Dashboard
            </a>
        </div>
    </form>
</div>