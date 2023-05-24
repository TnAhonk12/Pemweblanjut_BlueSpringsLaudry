<?php
include "../controllers/connection.php";
$no = 1;
$data = mysqli_query($connection, "SELECT * FROM user ORDER BY id_pelanggan ASC");
$user_counter = null;
while ($userData = mysqli_fetch_array($data)) {
    $user_counter++;
}
echo json_encode($user_counter);
?>