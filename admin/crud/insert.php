<?php
include '../koneksi/koneksi.php';



$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$email = $_POST['email'];
$id = $_POST['id'];


$insert = mysqli_query($koneksi, "INSERT INTO siswa (nis, nama_siswa, alamat, tanggal_lahir, email) VALUES ('$nis','$nama_siswa','$alamat','$tanggal_lahir','$email')");
header("location: ../../index.php");