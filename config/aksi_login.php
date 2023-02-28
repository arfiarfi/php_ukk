<?php
$koneksi = mysqli_connect("localhost","root","","db_ukk");
session_start();

if (isset($_POST['kirim'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];
     
  
     $sql = "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'";
      $result = mysqli_query($koneksi, $sql);
      if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
          $_SESSION['nama'] = $row['nama'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['nik'] = $row['nik'];
          $_SESSION['level'] = $row['level'];
         header("Location: ../masyarakat/index.php");
     } else {
        $sql = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['nama_petugas'] = $row['nama_petugas'];
            $_SESSION['id_petugas'] = $row['id_petugas'];
            $_SESSION['level'] = $row['level'];
           header("Location: ../petugas/index.php");
     }else {
        echo "<script>alert('Username atau Password tidak terdaftar'); window.location='../index.php?page=login'; </script>";
     }
 }
}

?>