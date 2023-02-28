<?php

$koneksi = mysqli_connect("localhost","root","","db_ukk");
?>

 <div class="container">
    <h3 class="mt-3">Dashboard</h3>
  <hr>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> Selamat Datang!</h4>
  <h3><?php echo $_SESSION['nama_petugas'] ?>.</h3>
  <hr>
  <p class="mb-0">Selamat datang kembali. Semoga hari anda menyenangkan...</p>
</div>


<?php
$no1=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM `masyarakat`"));
$no2=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM `pengaduan`"));
$no3=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM `Tanggapan`"));
$no4=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM `petugas`"));
?>

    <div class="row mt-3">
        <div class="col-md-3 mt-3">
            <div class="card" >
                <div class="card-header" style=" color: white; background: #AA8B56; font-weight: 900";>Masyarakat</div>
                <div class="card-body"><?=$no1?> Masyarakat</div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header" style="color: white; background: #AA8B56; font-weight: 900";>Pengaduan</div>
                <div class="card-body"><?=$no2?> Pengaduan</div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header" style="color: white; background: #AA8B56; font-weight: 900";>Tanggapan</div>
                <div class="card-body"><?=$no3?> Tanggapan</div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header" style="color: white; background: #AA8B56; font-weight: 900";>Petugas</div>
                <div class="card-body"><?=$no4?> Petugas</div>
            </div>
        </div>
    </div>
</div>
