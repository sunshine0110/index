<?php
$delay = 2; // Waktu penundaan dalam detik
$redirect_url = "https://niasbaratkab.go.id/?:2083"; // URL halaman tujuan

header("Refresh: $delay; URL=$redirect_url");
?>
