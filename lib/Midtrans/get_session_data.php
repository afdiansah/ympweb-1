<?php
session_start();

$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : '';

if ($order_id && isset($_SESSION['orders'][$order_id])) {
    echo json_encode($_SESSION['orders'][$order_id]);
} else {
    echo json_encode(null); // Tidak ada data ditemukan
}
?>