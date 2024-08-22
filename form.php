<?php include "admin/koneksi/koneksi.php"; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">
    <div class="row py-5">
        <div class="card">
            <div class="card-body">
                <form action="admin/crud/insert.php" method="post">
                    <div class="mb-3">
                        <label for="">NIS</label>
                        <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Siswa</label>
                        <textarea class="form-control" name="nama_siswa" placeholder="Masukkan Nama Siswa"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir"
                            placeholder="Masukkan Tanggal Lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary mr-2">
                        <a href="dashboard.php">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>