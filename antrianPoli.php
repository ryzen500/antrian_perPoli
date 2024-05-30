<?php
header('Content-Type: application/json');

// Koneksi ke database dan query running
$dsn = 'pgsql:host=192.168.214.222;port=5121;dbname=db_rswb_simulasi_20221227';
$user = 'developer';
$password = 's6SpprwyLVqh7kFg';

try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $ruangan_id = $_POST['ruangan_id'];

    // Query untuk mendapatkan data dari database
    $sql = "
    SELECT pasien.no_rekam_medik,rm.ruangan_singkatan,t.no_urutantri,rm.ruangan_nama,pm.gelardepan,pm.nama_pegawai, COALESCE(gm.gelarbelakang_nama, '') AS gelarbelakang_nama
    FROM pendaftaran_t t
    JOIN ruangan_m rm ON rm.ruangan_id = t.ruangan_id 
    JOIN pegawai_m  pm ON pm.pegawai_id = t.pegawai_id 
    JOIN pasien_m  pasien ON pasien.pasien_id = t.pasien_id 
    JOIN gelarbelakang_m  gm ON gm.gelarbelakang_id = pm.gelarbelakang_id 
    JOIN layarruangan_m lr ON lr.ruangan_id = t.ruangan_id AND lr.layarantrian_id = 95
    WHERE DATE(t.tgl_pendaftaran) = '".date('Y-m-27')."' 
    AND t.panggilantrian IS TRUE
    AND t.ruangan_id = :ruangan_id
    ORDER BY t.no_urutantri::integer DESC
    LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ruangan_id', $ruangan_id, PDO::PARAM_INT);
    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data === false) {
        // Query kedua jika data pertama tidak ditemukan
        $sql2 = "SELECT * FROM ruangan_m WHERE ruangan_id = :ruangan_id";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->bindParam(':ruangan_id', $ruangan_id, PDO::PARAM_INT);
        $stmt2->execute();

        $ruanganData = $stmt2->fetch(PDO::FETCH_ASSOC);

        if ($ruanganData === false) {
            http_response_code(404);
            echo json_encode(['error' => 'Data tidak ditemukan.']);
        } else {
            $result = [
                'ruangan_singkatan' => $ruanganData['ruangan_singkatan'],
                'no_urutantri'=>'000',
                'ruangan_nama'=>'-',
                'no_rekam_medik'=>'-'
            ];
            echo json_encode($result);
        }
    } else {
        echo json_encode($data);
    }
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
?>
