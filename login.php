<?php
session_start();
include "admin/koneksi/koneksi.php";
// $action = $_GET['action'];
$user_name = htmlspecialchars($_POST['user_name']);
$user_pass = sha1($_POST['user_pass']);

$query = mysqli_query($koneksi, "SELECT * FROM user  WHERE user.user_name = '$user_name'");
if (mysqli_num_rows($query) > 0) {
    $dataUser = mysqli_fetch_assoc($query);
    if ($dataUser['user_name'] == $user_name) {
        // $_SESSION['nama_lengkap'] = $dataUser['nama_lengkap'];
        $_SESSION['user_pass'] = $dataUser['user_pass'];
        $_SESSION['user_level'] = $dataUser['user_level'];
        if ($dataUser['user_level'] == 1) {
            header('location: dashboard.php');
            exit;
        } else {
            $id = $dataUser['user_id'];
            $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE user_id = $id ");
            $siswa_id = mysqli_fetch_assoc($query);
            header('location:register.php?action=3&id=' . $siswa_id['user_id']);
            exit;
        }
    }
}
header('location:register.php?action=3&id=0');
exit;
