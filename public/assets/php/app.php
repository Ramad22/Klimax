<?php
$token = "dSqw92ByRd_VjG2WYjR-";

$mysqli = new mysqli("localhost", "root", "", "klimax");

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}


$query = "SELECT no_hp FROM data_wargas";  

$result = $mysqli->query($query);

if ($result) {
    $phoneNumbers = [];
    while ($row = $result->fetch_assoc()) {
        $phoneNumbers[] = $row['no_hp'];
    }

    $mysqli->close();

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
                'message' => 'Ada bahaya di rt 03',
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
        if ($response === false) {
            // Menangani kesalahan cURL
            die("Error during cURL request: " . curl_error($curl));
        } else {
            // Menampilkan respons
            echo $response;

            // Menangani respons API sesuai kebutuhan
            if (strpos($response, 'message sent successfully') !== false) {
                // Jika pesan terkirim dengan sukses
                echo "Pesan berhasil dikirim ke nomor: $target\n";
            } else {
                // Jika terjadi kesalahan saat mengirim pesan
                echo "Error: Failed to send message to nomor: $target\n";
            }
        }
    }
    sleep(4);
    header("Location: http://127.0.0.1:8000/landing-page");
    exit();
} else {
    // Menangani kesalahan query database
    die("Error: " . $mysqli->error);
}
?>
