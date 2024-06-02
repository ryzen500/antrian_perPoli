<?php
$api_url = 'http://192.168.30.194/antrian/computer1.php'; // Gantilah dengan alamat IP atau domain yang sesuai

// Mengambil data dari API menggunakan cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);

if ($data) {
    // $is_logged_in = $data['is_logged_in'];
    $ip_address = $data['ip_address'];

    // echo "Status Login: " . ($is_logged_in ? "Logged in" : "Not logged in") . "<br>";
    echo "IP Address Monitor1 (yang mengakses API): " . $ip_address;
} else {
    echo "Gagal mengambil data dari Computer1.";
}
?>
