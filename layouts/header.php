<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500&family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: Poppins;
    }
</style>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="font-weight: 900;">Layanan Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">

                    <?php
                    if ($_SESSION['level'] == 'admin') { ?>
                        <a class="btn btn-light" href="index.php?page=pengaduan" style="font-weight: 900;">Data Pengaduan</a>
                        <a class="btn btn-light" href="index.php?page=tanggapan" style="font-weight: 900;">Data Tanggapan</a>
                        <a class="btn btn-light" href="index.php?page=masyarakat" style="font-weight: 900;">Data Masyarakat</a>
                        <a class="btn btn-light" href="index.php?page=petugas" style="font-weight: 900;">Data Petugas</a>
                        <a class="btn btn-light" href="../config/aksi_logout.php" style="font-weight: 900;">Keluar</a>
                        

                    <?php } elseif ($_SESSION['level'] == 'petugas') { ?>
                        <a class="btn btn-light" href="index.php?page=pengaduan" style="font-weight: 900;">Data Pengaduan</a>
                        <a class="btn btn-light" href="index.php?page=tanggapan" style="font-weight: 900;">Data Tanggapan</a>
                        <a class="btn btn-light" href="../config/aksi_logout.php" style="font-weight: 900;">Keluar</a>

                    <?php } elseif ($_SESSION['level'] == 'masyarakat') { ?>
                        <a class="btn btn-light" href="../config/aksi_logout.php" style="font-weight: 900;">Keluar</a>

                    <?php } else { ?>
                        <a class="btn btn-light" href="index.php?page=registrasi">Daftar Akun</a>
                        <a class="btn btn-light" href="index.php?page=login">Login</a>

                    <?php } ?>


                </ul>
            </div>
        </div>
    </nav>