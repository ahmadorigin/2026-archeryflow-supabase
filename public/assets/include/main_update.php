<!-- edit.php - Ubah Data Penjualan dengan Tema Teal/Cyan -->
<div
    class="bg-linear-to-br from-cyan-900/30 to-teal-900/30 backdrop-blur-sm rounded-xl border border-white/10 p-6 md:p-8">

    <!-- Form Ubah Data -->
    <form action="" method="post" class="space-y-4">
        <!-- Hidden ID -->
        <input type="hidden" name="id" value="<?= $rows[0]["id"] ?? '' ?>">

        <!-- Grid Layout 2 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Tanggal -->
            <div>
                <label for="date" class="block text-white/80 text-sm font-medium mb-2">
                    📅 Tanggal
                </label>
                <input type="date" name="date" id="date" value="<?= htmlspecialchars($rows[0]["tanggal"] ?? '') ?>"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <?php if(isset($type)) : ?>
            <?php if($type === "pending") : ?>
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
            <div>
                <label for="nama-pembeli" class="block text-white/80 text-sm font-medium mb-2">
                    👤 Nama Pembeli <span class="text-red-400">*</span>
                </label>
                <input type="text" name="nama-pembeli" id="nama-pembeli"
                    value="<?= htmlspecialchars($rows[0]["nama_pembeli"] ?? '') ?>"
                    placeholder="Nama lengkap pembeli..." required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-white/80 text-sm font-medium mb-2">
                    ✉️ Email
                </label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($rows[0]["email"] ?? '') ?>"
                    placeholder="johndoe@example.com"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Alamat Lengkap -->
            <div>
                <label for="alamat" class="block text-white/80 text-sm font-medium mb-2">
                    📍 Alamat Lengkap <span class="text-red-400">*</span>
                </label>
                <input type="text" name="alamat" id="alamat"
                    value="<?= htmlspecialchars($rows[0]["alamat_lengkap"] ?? '') ?>" placeholder="Jepang, Tokyo..."
                    required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Kode Produk -->
            <div>
                <label for="kode-produk" class="block text-white/80 text-sm font-medium mb-2">
                    🏷️ Kode Produk
                </label>
                <input type="text" name="kode-produk" id="kode-produk"
                    value="<?= htmlspecialchars($rows[0]["kode_produk"] ?? '') ?>" placeholder="000.0000"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Nama Produk -->
            <div>
                <label for="nama-produk" class="block text-white/80 text-sm font-medium mb-2">
                    🎯 Nama Produk <span class="text-red-400">*</span>
                </label>
                <input type="text" name="nama-produk" id="nama-produk"
                    value="<?= htmlspecialchars($rows[0]["nama_produk"] ?? '') ?>" placeholder="Turkhis..." required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Warna -->
            <div>
                <label for="warna" class="block text-white/80 text-sm font-medium mb-2">
                    🎨 Warna
                </label>
                <input type="text" name="warna" id="warna" value="<?= htmlspecialchars($rows[0]["warna"] ?? '') ?>"
                    placeholder="Navy..."
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Draw Weight -->
            <div>
                <label for="draw-weight" class="block text-white/80 text-sm font-medium mb-2">
                    ⚡ Draw Weight
                </label>
                <input type="text" name="draw-weight" id="draw-weight"
                    value="<?= htmlspecialchars($rows[0]["draw_weight"] ?? '') ?>" placeholder="00 Ibs"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Harga -->
            <div>
                <label for="harga" class="block text-white/80 text-sm font-medium mb-2">
                    💰 Harga
                </label>
                <input type="number" name="harga" id="harga" min="0"
                    value="<?= htmlspecialchars($rows[0]["harga"] ?? '') ?>" placeholder="3000000"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- Ongkir -->
            <div>
                <label for="ongkir" class="block text-white/80 text-sm font-medium mb-2">
                    🚚 Ongkir
                </label>
                <input type="number" name="ongkir" id="ongkir" min="0"
                    value="<?= htmlspecialchars($rows[0]["ongkir"] ?? '') ?>" placeholder="200000"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>

            <!-- dp uang muka -->
            <?php if(isset($type)) : ?>
            <?php if($type === "pending") : ?>
            <div>
                <label for="dp" class="block text-white/80 text-sm font-medium mb-2">
                    ⚖️ Uang Muka (DP)
                </label>
                <input type="number" name="dp" id="dp" min="0" value="<?= htmlspecialchars($rows[0]["dp"] ?? '') ?>"
                    placeholder="50000" required
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/40 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Status -->
            <div>
                <label for="status" class="block text-white/80 text-sm font-medium mb-2">
                    🔄 Status
                </label>
                <select name="status"
                    class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all cursor-pointer">
                    <option value="pending" <?= ($rows[0]["status"] ?? '') == 'pending' ? 'selected' : '' ?>
                        class="bg-cyan-900">
                        ⏳ Kredit
                    </option>
                    <option value="lunas" <?= ($rows[0]["status"] ?? '') == 'lunas' ? 'selected' : '' ?>
                        class="bg-cyan-900">
                        ✅ Lunas
                    </option>
                </select>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex flex-col sm:flex-row gap-3 pt-4 mt-2 border-t border-white/10">
            <button type="submit" name="submit"
                class="px-6 py-2.5 bg-linear-to-r from-yellow-600 to-orange-600 hover:from-yellow-500 hover:to-orange-500 text-white font-medium rounded-lg transition-all duration-200 shadow-lg hover:shadow-yellow-500/25 flex items-center justify-center gap-2">
                <span>✏️</span>
                Update Data
            </button>

            <button type="reset"
                class="px-6 py-2.5 bg-white/5 hover:bg-linear-to-r from-cyan-900/30 to-teal-900/30 text-white/70 hover:text-white rounded-lg transition-all duration-200 flex items-center justify-center gap-2 border border-white/10">
                <span>🔄</span>
                Reset Form
            </button>

            <a href="./main_table.php"
                class="px-6 py-2.5 bg-white/10 hover:bg-linear-to-r from-cyan-900/60 to-teal-900/60 text-white/80 hover:text-white rounded-lg transition-all duration-200 flex items-center justify-center gap-2 border border-white/10">
                <span>←</span>
                Kembali ke Main Table
            </a>
        </div>
    </form>
</div>