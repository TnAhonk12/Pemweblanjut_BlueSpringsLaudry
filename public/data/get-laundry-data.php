<?php
include "../controllers/connection.php";
$no = 1;
$data = mysqli_query($connection, "SELECT * FROM cucian ORDER BY id_cucian ASC");
$laundry_counter = null;
while ($userData = mysqli_fetch_array($data)) {
    $laundry_counter++;
}
echo json_encode($laundry_counter);
?>