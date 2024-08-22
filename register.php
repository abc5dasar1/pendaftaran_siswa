<?php include "admin/koneksi/koneksi.php";

include 'admin/koneksi/koneksi.php';
$action = $_GET['action'];
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE user_id = $id");
$row = mysqli_fetch_assoc($query);
if ($id > 0) {
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id = $id");
    $userrow = mysqli_fetch_assoc($query);
}

// var_dump($row);
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container">
    <div class="row py-5">
        <div class="card">
            <div class="card-body">
                <form action="admin/crud/update.php?action=<?= $action  ?>&id=<?= $id ?>" method="post">
                    <p>user Account</p>
                    <div class="mb-3">
                        <label for="">User Name</label>
                        <input type="text" class="form-control" name="user_name" placeholder="username" required
                            value="<?= $userrow['user_name'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="user_pass" required
                            value="<?= $userrow['user_pass'] ?? '' ?>">
                    </div>
                    <p> User Profile</p>
                    <div class="mb-3">
                        <label for="">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama_siswa" placeholder="Masukkan Nama Siswa "
                            value="<?= $row['nama_siswa'] ?? '' ?>" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required
                            value="<?= $row['alamat'] ?? '' ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir"
                            placeholder="Masukkan Tanggal Lahir" required value="<?= $row['tanggal_lahir'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email" required
                            value="<?= $row['email'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary mr-2 ">
                        <a href="index.php">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>