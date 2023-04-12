<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($konek, "DELETE FROM user where id = 
'$id'");
if ($query) {
    header("Location: data.php");
} else {
    echo "Proses hapus gagal!";
}
