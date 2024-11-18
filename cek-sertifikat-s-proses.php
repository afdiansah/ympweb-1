<?php
//041711202406-Ahmad Firdaus-LULUS
//nomortanggalseminarberapa-Nama
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $certificateID = $_POST['certificateID'];
    $file = 'cek-lulus-seminar.txt';

    if (preg_match('/^YMP-S-\d+$/', $certificateID)) {
        $numericID = preg_replace('/\D/', '', $certificateID);
        $formattedID = 'YMP-S-' . $numericID;

        if (file_exists($file)) {
            $content = file_get_contents($file);
            $lines = explode("\n", $content); // Pastikan memisahkan dengan newline
            $lines = array_map('trim', $lines); // Bersihkan spasi tambahan
            error_log("File content: " . print_r($lines, true)); // Debug isi file

            $found = false;

            foreach ($lines as $index => $line) {
                error_log("Baris ke-$index: $line");
                $lineParts = explode('-', $line);

                if (count($lineParts) > 2) {
                    $lineID = trim($lineParts[0]); // Ambil ID dari baris
                    $formattedLineID = 'YMP-S-' . $lineID;

                    if ($formattedID === $formattedLineID) {
                        $found = true;
                        error_log("ID ditemukan di baris ke-$index");
                        break;
                    }
                }
            }

            if ($found) {
                echo json_encode(['status' => 'valid']);
            } else {
                echo json_encode(['status' => 'invalid']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'File not found']);
        }
    } else {
        echo json_encode(['status' => 'invalid', 'message' => 'Invalid format']);
    }
} else {
    header('HTTP/1.1 405 Method Not Allowed');
}
?>
