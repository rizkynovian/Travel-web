<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jenkel = $_POST['jenkel'];
$paket = $_POST['paket'];
$tanggal = $_POST['tanggal'];
$pesan = $_POST['pesan'];

$query = mysqli_query($konek, "UPDATE user SET 
                nama = '$nama',
                email = '$email',
                jenkel = '$jenkel',
                paket = '$paket',
                tanggal = '$tanggal',
                pesan = '$pesan',
                WHERE id = '$id'");

if ($query) {
    header("location:data.php");
} else {
    echo "Proses edit gagal!!!";
}
