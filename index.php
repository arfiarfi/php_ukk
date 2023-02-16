<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<style>
  body {
    background-image: url("https://t3.ftcdn.net/jpg/04/12/82/16/360_F_412821610_95RpjzPXCE2LiWGVShIUCGJSktkJQh6P.jpg");
    background-size: cover;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
        <div class="container">
            <a class="navbar-brand" href="index.php">Aplikasi Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="btn btn-light" href="index.php?page=login">Login</a>
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

<footer class="footer py-2 bg-light fixed-bottom" style="box-shadow: 0 -1px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
    <div class="container">
        <p class="text-center">UKK RPL 2023 | YOGA | SMKN 2 Magelang</p>
    </div>
</footer>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>