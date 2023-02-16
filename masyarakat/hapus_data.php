<?php 
$koneksi = mysqli_connect("localhost", "root", "", "praktik_yoga");
$id_pengaduan = $_POST['id_pengaduan'];
mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'"); 
header("location:index.php");
?>

