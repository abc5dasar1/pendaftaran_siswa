<?php

$action = isset($_GET['action']) ? $_GET['action'] : $_POST['action'];

switch ($action) {
    case 1:
        register();
        header("location:../../index.php");
        break;
    case 3:
        edit();
        header("location: ../../index.php");
    case 9:
        delete();
        header("location: ../../index.php?hasil=10");
        break;
}

function edit()
{
    include '../koneksi/koneksi.php';
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $update = mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama_siswa='$nama_siswa', alamat='$alamat', tanggal_lahir='$tanggal_lahir', email='$email' WHERE id='$id' ");
}

function delete()
{
    include '../koneksi/koneksi.php';
    $id = $_GET['id'];

    $delete = mysqli_query($koneksi, "DELETE FROM siswa WHERE id = '$id'");
}
function register()
{
    include '../koneksi/koneksi.php';
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];

    $insertuser = mysqli_query($koneksi, "INSERT INTO user (user_name, user_pass) VALUES ('$user_name','$user_pass') ");
    $user_id = mysqli_query($koneksi, "SELECT LAST_INSERT_ID()");


    // $user_id = $_POST['user_id'];
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $id = $_POST['id'];


    $insertsiswa = mysqli_query($koneksi, "INSERT INTO siswa (user_id,nis, nama_siswa, alamat, tanggal_lahir, email) VALUES ('$user_id','$nis','$nama_siswa','$alamat','$tanggal_lahir','$email')");
    header("location: ../../index.php");
}
