<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
include 'admin/koneksi/koneksi.php';
$action = $_GET['action'];
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id = '$id'");
$row = mysqli_fetch_assoc($query)
    ?>
<div class="container">
    <div class="row py-5">
        <div class="card">
            <div class="card-head">Edit</div>
            <div class="card-body">
                <form action="admin/crud/update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="action" value="<?= $action ?>">
                    <div class="mb-3">
                        <label for="">Nis</label>
                        <input <?= $action == 9 ? 'readonly' : '' ?> type="text" class="form-control" name="nis"
                            value="<?= $row['nis'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Siswa</label>
                        <textarea class="form-control" name="nama_siswa" required><?= $row['nama_siswa'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= $row['alamat'] ?>"
                            placeholder="Masukkan Nama Level" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir"
                            value="<?= $row['tanggal_lahir'] ?>" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>"
                            placeholder="Masukkan Nama Level" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="edit" class="btn btn-primary mr-2">
                            <?= $action == 3 ? 'update' : 'delete' ?>
                        </button>
                        <a href="index.php">Kembali</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>