<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $certificateID = $_POST['certificateID'];
    $file = 'cek-lulus.txt';

    // Validasi format ID sertifikat yang diharapkan: YMP-S- diikuti oleh angka
    if (preg_match('/^YMP-S-\d+$/', $certificateID)) {
        // Ekstrak angka dari ID sertifikat yang dikirimkan
        $numericID = preg_replace('/\D/', '', $certificateID); // Hanya ambil angka
        $formattedID = 'YMP-S-' . $numericID;

        if (file_exists($file)) {
            $content = file_get_contents($file);
            $lines = explode(PHP_EOL, $content);

            // Flag untuk menandakan apakah ID ditemukan
            $found = false;

            // Cek setiap baris apakah mengandung ID yang valid
            foreach ($lines as $line) {
                // Ambil ID dari setiap baris (asumsi format: 'angka-nama-lulus')
                $lineParts = explode('-', $line);

                if (count($lineParts) > 2) {
                    $lineID = $lineParts[0]; // Ambil ID dari baris
                    $formattedLineID = 'YMP-S-' . $lineID; // Format ID dari baris

                    if ($formattedID === $formattedLineID) {
                        $found = true;
                        break;
                    }
                }
            }

            // Gunakan $found secara langsung untuk menentukan status
            if ($found) {
                echo json_encode(['status' => 'valid']);
            } else {
                echo json_encode(['status' => 'invalid']);
            }
        } else {
            echo json_encode(['status' => 'error']);
        }
    } else {
        echo json_encode(['status' => 'invalid']);
    }
} else {
    header('HTTP/1.1 405 Method Not Allowed');
}
?>
