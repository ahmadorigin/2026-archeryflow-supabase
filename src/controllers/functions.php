<?php

    $supabaseUrl = "https://heeynbetpdaogtmfvatd.supabase.co";
    $supabaseKey = "sb_publishable_3MVyLY2xNrgAPItj0aUI_Q_ZEi_hYsI";
    
    function s_query($method, $endPoint, $data = null) {
        global $supabaseUrl, $supabaseKey;  

        $ch = curl_init($supabaseUrl . $endPoint);

        $headers = [
            "apikey: $supabaseKey",
            "Authorization: Bearer $supabaseKey",
            "Content-Type: application/json",
            "Prefer: return=representation",
            "X-HTTP-Method-Override: $method"
        ];

        if ($data !== null) {
            $payload = json_encode($data);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            
            $headers[] = "Content-Length: " . strlen($payload);
        }
        
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $error = curl_error($ch);

        if($error) {
            return "CURL Error : " . $error;
        }

        return json_decode($response, true);
    }

    function add($data) {
        $dataBaru = [
            "tanggal" => $data["date"],
            "nama_pembeli" => $data["nama-pembeli"],
            "email" => $data["email"],
            "alamat_lengkap" => $data["alamat"],
            "kode_produk" => $data["kode-produk"],
            "nama_produk" => $data["nama-produk"],
            "warna" => $data["warna"],
            "draw_weight" => $data["draw-weight"],
            "harga" => ($data["harga"] === "") ? 0 : $data["harga"],
            "ongkir" => ($data["ongkir"] === "") ? 0 : $data["ongkir"],
            "status" => $data["status"]
        ];

        return s_query("POST", "/rest/v1/tb_penjualan", $dataBaru);
    }

    function update($data) {
        $id = $data["id"];

        $dataBaru = [
            "tanggal" => $data["date"],
            "nama_pembeli" => $data["nama-pembeli"],
            "email" => $data["email"],
            "alamat_lengkap" => $data["alamat"],
            "kode_produk" => $data["kode-produk"],
            "nama_produk" => $data["nama-produk"],
            "warna" => $data["warna"],
            "draw_weight" => $data["draw-weight"],
            "harga" => ($data["harga"] === "") ? 0 : $data["harga"],
            "ongkir" => ($data["ongkir"] === "") ? 0 : $data["ongkir"],
            "status" => $data["status"]
        ];

        return s_query("PATCH", "/rest/v1/tb_penjualan?id=eq." . $id, $dataBaru);
    }

    function delete($id) {
        return s_query("DELETE", "/rest/v1/tb_penjualan?id=eq." . $id);
    }

    function search($keyword) {
        $keyword = str_replace([',', '(', ')', '*', '"'], '', $_GET["keyword"]);
        $keyword = trim($keyword);
        
        $fields = [
                "nama_pembeli.ilike.*$keyword*",
                "nama_produk.ilike.*$keyword*",
                "kode_produk.ilike.*$keyword*",
                "alamat_lengkap.ilike.*$keyword*",
                "email.ilike.*$keyword*",
                "warna.ilike.*$keyword*",
                "status.ilike.*$keyword*"
            ];

        // Gabungkan pakai koma sebagai LEM-nya
        $filter = implode(",", $fields);
        $endpoint = "/rest/v1/tb_penjualan?select=*&or=(" . $filter . ")&order=id.desc";
        
        return s_query("GET", $endpoint);
    }

    function registrasi($data) {
        // 1. Ambil data & bersihkan spasi/karakter aneh dasar
        $username = strtolower(stripslashes(trim($data["username"])));
        $password = $data["password"];
        $password2 = $data["password2"];
        
        // 2. Cek username ganda (Pakai GET ke Supabase)
        $cekUser = s_query("GET", "/rest/v1/tb_users?username=eq." . $username);

        // Jika hasil GET tidak kosong, berarti username sudah ada
        if (!empty($cekUser)) {
            echo "<script>alert('Username mu pdo karo sing lio!');</script>";
            return false;
        }

        // 3. Cek kesamaan password
        if ($password !== $password2) {
            echo "<script>alert('Password ra podo!');</script>";
            return false;
        }

        // 4. Enkripsi password 
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // 5. Masukkan data ke Supabase (Pakai POST)
        $dataBaru = [
            "username" => $username,
            "password" => $passwordHash
        ];

        $result = s_query("POST", "/rest/v1/tb_users", $dataBaru);

        // Di Supabase, jika sukses POST biasanya mengembalikan data yang diinput
        // Jika ada error, biasanya ada field 'code' atau 'message'
        if (isset($result['code'])) {
            return false;
        }

        return true; // Berhasil
    }

    function login($data) {
        $username = strtolower(stripslashes(trim($data["username"])));
        $password = $data["password"];

        // 1. Cari user berdasarkan username
        $result = s_query("GET", "/rest/v1/tb_users?username=eq." . $username);

        if (!empty($result)) {
            $row = $result[0];

            // 2. Cek apakah password cocok dengan hash di DB
            if (password_verify($password, $row["password"])) {

                $_SESSION["login"] = true;
                $_SESSION["username"] = $row["username"];
                $_SESSION["id"] = $row["id"];

                // cek remember
                if (isset($_POST["remember"])) {
                    // buat cookie
                    setcookie('id', $row["id"], time() + 120);
                    setcookie('key', hash('sha256', $row["username"]), time() + 120);
                }

                return $row; // Kembalikan data user jika sukses
            }
        }

        return false;
    }