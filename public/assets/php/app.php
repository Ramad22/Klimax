<?php
$token = "dSqw92ByRd_VjG2WYjR-";

// Membuat koneksi ke database (gantilah dengan kredensial database sesuai dengan pengaturan Anda)
$mysqli = new mysqli("localhost", "root", "", "klimax");

// Memeriksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

// Query untuk mengambil semua nomor telepon dari database
$query = "SELECT no_hp FROM data_wargas";  // Anda mungkin perlu menyesuaikan query ini berdasarkan skema database Anda

$result = $mysqli->query($query);

if ($result) {
    // Mengambil semua nomor telepon dari hasil query
    $phoneNumbers = [];
    while ($row = $result->fetch_assoc()) {
        $phoneNumbers[] = $row['no_hp'];
    }

    // Menutup koneksi database
    $mysqli->close();

    // Mengirim pesan ke setiap nomor telepon
    foreach ($phoneNumbers as $target) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => 'Ada bahaya di rt 03 mohon siap siaga di depan rumah anda',
                'delay' => '2',
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: $token",
            ),
        ));

        // Menjalankan permintaan cURL
        $response = curl_exec($curl);

        // Menutup sesi cURL
        curl_close($curl);

        // Menangani respons sesuai kebutuhan
        echo $response;

sleep(4);
if ($response !== false) {
    header("Location: http://127.0.0.1:8000/landing-page");
    exit();
}
    }
}