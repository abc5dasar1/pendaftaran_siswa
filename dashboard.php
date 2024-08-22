<?php
include "./admin/koneksi/koneksi.php";
ob_start();
$query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        // include "admin/inc/sidebar.php"; 
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div class="container">
            <div class="row py-5">
                <div class="d-flex justify-content-end mb-3">
                    <a href="form.php" class="btn btn-success btn-sm"><i class="bi bi-plus"></i>Tambah Data</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        while ($row = mysqli_fetch_assoc($query)): ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nis'] ?></td>
                                <td><?php echo $row['nama_siswa'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                                <td><?php echo $row['tanggal_lahir'] ?></td>
                                <td><?php echo $row['email'] ?></td>

                                <td>
                                    <a href="admin/edit-form.php?action=3&id=<?= $row['id'] ?>"
                                        class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i>Edit</a>
                                    <a href="admin/crud/update.php?action=9&id=<?= $row['id'] ?>"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus ini?')"
                                        class="btn btn-sm btn-danger"><i class="bi bi-trash"></i>Hapus</a>
                                </td>
                            </tr> <?php endwhile ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="admin/vendor/jquery/jquery.min.js"></script>
        <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="admin/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="admin/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="admin/js/demo/chart-area-demo.js"></script>
        <script src="admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>