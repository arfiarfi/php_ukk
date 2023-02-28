<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500&family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>

<style>
  body {
    background-image: url("https://cdn.pixabay.com/photo/2015/01/31/05/05/background-618226_960_720.png");
    background-size: cover;
    font-family: Poppins;
}
</style>

<body >
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container " >
            <a class="navbar-brand" href="index.php" style="font-weight: 900">Layanan Pengaduan Masyarakat</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="btn btn-light" href="index.php?page=login " style="font-weight: 900">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_GET['page'])) {
        $page= $_GET['page'];

        switch ($page) {
            case 'login':
                include 'login.php';
                break;
            case 'registrasi':
                include 'registrasi.php';
                break;
            
            default:
                echo "Halaman Tidak Tersedia";
                break;
        }
    } else {
        include 'home.php';
    }
    ?>

<footer class="footer py-2 bg-light fixed-bottom ">
    <div class="container" >
        <p class="text-center">©Copyright © 2023 UKK SMK N 2 Magelang.By Akbar Firmansyah.</p>
    </div>
</footer>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>