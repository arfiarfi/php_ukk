<html>
    <style>
  body {
    background-image: url("https://cdn.pixabay.com/photo/2015/01/31/05/05/background-618226_960_720.png");
    background-size: cover;
    font-family: Poppins;
}
</style>
<?php

session_start();
    include '../layouts/header.php';

    if (isset($_GET['page'])) {
        $page= $_GET['page'];

        switch ($page) {
            case 'tanggapan':
                include 'tanggapan.php';
                break;            
            default:
                echo "Halaman Tidak Tersedia";
                break;
        }
    } else {
        include 'home.php';
    }

    include '../layouts/footer.php';
?>
</html>
