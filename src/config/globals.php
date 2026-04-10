<?php
// Deteksi apakah sedang di Localhost atau Railway
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    // SESUAIKAN dengan nama folder project kamu di htdocs
    $base_url = "/my-self-project/2026-archeryflow-supabase/public";
} else {
    // Kalau di Railway, root-nya adalah kosong/garis miring saja
    $base_url = "";
}