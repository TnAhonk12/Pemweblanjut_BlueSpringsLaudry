<?php
include "../controllers/connection.php";
$no = 1;
$data = mysqli_query($connection, "SELECT * FROM transaksi ORDER BY id_transaksi ASC");
$transaction_counter = null;
$transaction_data = array();
while ($userData = mysqli_fetch_array($data)) {
    array_push($transaction_data, [$userData['id_transaksi'], $userData['id_cucian'], $userData['total_berat'], $userData['ongkir'], $userData['diskon'], $userData['total_harga'], $userData['tanggal_masuk'], $userData['tanggal_keluar'],]);
    $transaction_counter++;
}
// echo json_encode($transaction_counter);
echo json_encode($transaction_data);
?>