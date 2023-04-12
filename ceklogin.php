<?php
session_start();
include "koneksi.php";

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($konek, "SELECT *FROM admin WHERE username='$username' and password='$password'")
    or die(mysqli_error($konek));

//menghitung jumlah datayang ditentukan
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:data.php");
} else {
    header("location:login.php?pesan=gagal");
}
