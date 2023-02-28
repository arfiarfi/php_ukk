<div class=" " style="padding-top: 40px; ">
    <div class="col-md-4 offset-md-1" style="width: 30%;">
        <div class="card"  style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); background: #F9F5E7;">
            <div class="card-header"style="text-align: center;">
                <h2 style="font-family: fantasy; font-size: 30px; color: #395144;">REGISTRASI</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. Telp</label>
                        <input type="number" class="form-control" name="telp" placeholder="Masukkan No. Telp" required>
                    </div>

            </div>
             <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-primary" style="box-shadow: 0 4px 3px 0 rgba(0,0,0,0.2), 0 6px 10px 0 rgba(0,0,0,0.19); background: #395144; border-color: #395144; font-weight: 900;">DAFTAR</button>
                <a href="index.php?page=login" class="m-3 " style="font-size: 12px; font-family: Poppins;">Sudah Punya Akun? Klik disini!</a>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'config/koneksi.php';
if (isset($_POST['kirim'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = 'masyarakat';

    $query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUE ('$nik','$nama','$username','$password','$telp','$level')");

    if ($query) {
        header('location:index.php?page=login');
    }
}
?>