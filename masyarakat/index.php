<html>
    <style>
  body {
    background-image: url("https://t3.ftcdn.net/jpg/04/12/82/16/360_F_412821610_95RpjzPXCE2LiWGVShIUCGJSktkJQh6P.jpg");
    background-size: cover;
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
