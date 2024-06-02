<?php
// session_start();
require 'get_client_ip.php';

// Cek status login

// Dapatkan IP address client yang mengakses API
$ip_address = getClientIp();

// Mengembalikan informasi dalam format JSON
echo json_encode([
    'ip_address' => $ip_address
]);
?>
