<?php
header('Content-Type: application/json');

// Koneksi ke database dan query running

// $dsn = 'pgsql:host=192.168.214.222;port=5121;dbname=db_rswb_simulasi_20221227';
$dsn = 'pgsql:host=192.168.214.225;port=5121;dbname=db_rswb_running_new';
$user = 'developer';
$password = 's6SpprwyLVqh7kFg';

try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $ip_address = $_POST['ip_address'];


    $sql0 = "SELECT * FROM loginpemakai_k WHERE ip_address = :ip_address order by waktuterakhiraktifitas DESC LIMIT 1";
    $stmt0 = $pdo->prepare($sql0);
    $stmt0->bindParam(':ip_address', $ip_address, PDO::PARAM_INT);
    $stmt0->execute();

    $aktivitasLogin = $stmt0->fetch(PDO::FETCH_ASSOC);



    $ruangan_id = $aktivitasLogin['ruanganaktifitas'];


    // Query untuk mendapatkan data dari database
    $sql = "
    SELECT pasien.no_rekam_medik, t.update_time, CONCAT(rm.ruangan_singkatan, '-', t.no_urutantri) AS ruangan_singkatan,t.no_urutantri,rm.ruangan_nama,pm.gelardepan,pm.nama_pegawai, COALESCE(gm.gelarbelakang_nama, '') AS gelarbelakang_nama
    FROM pendaftaran_t t
    LEFT JOIN ruangan_m rm ON rm.ruangan_id = t.ruangan_id 
    LEFT JOIN pegawai_m  pm ON pm.pegawai_id = t.pegawai_id 
    LEFT JOIN loginpemakai_k  lk ON lk.pegawai_id = t.pegawai_id 
    LEFT JOIN pasien_m  pasien ON pasien.pasien_id = t.pasien_id 
    LEFT JOIN gelarbelakang_m  gm ON gm.gelarbelakang_id = pm.gelarbelakang_id 
    LEFT JOIN layarruangan_m lr ON lr.ruangan_id = t.ruangan_id AND lr.layarantrian_id = 95
    WHERE DATE(t.tgl_pendaftaran) = '".date('Y-m-d')."' 
    AND t.panggilantrian IS TRUE
    AND lk.ip_address = '".$ip_address."'
    AND t.ruangan_id = :ruangan_id
    ORDER BY t.update_time DESC
    LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ruangan_id', $ruangan_id, PDO::PARAM_INT);
    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);


    // var_dump(date('Y-m-30'));die;
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
                'ruangan_singkatan' => $ruanganData['ruangan_singkatan'] . '-' . '000',
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
