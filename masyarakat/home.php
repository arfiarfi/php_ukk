<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_ukk");
?>
<div class="container">
    <div class="row">
        <div class="col-md-12" mt-3 >
        <div class="col-md-12" mt-3 style="padding-top: 20px;  text-align: center; color: #585858">    
        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">SELAMAT DATANG!</h4>    
  <p style="font-size: 20px; "><b><?php echo $_SESSION['nama']; ?></b></p>
  <hr>
  <p class="mb-0">Aplikasi Pengaduan Berfungsi Sebagai Sarana mengadukan Sesuatu.</p>
</div>
<hr>
</div>
            <div class="card" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="card-header" style="font-family: fantasy; font-size: 24px; color: #146c43; background: #d1e7dd; box-shadow: 1px 1px #a3cfbb inset";>
                FORM PENGADUAN
     </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">JUDUL LAPORAN</label>
                            <input type="text" class="form-control" name="judul_laporan" placeholder="Masukkan Judul" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold; padding-top: 10px; ">ISI LAPORAN</label>
                            <textarea class="form-control" name="isi_laporan" placeholder="Masukkan Isi Laporan" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">FOTO</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
                </div>
                </form>
                <?php
                include '../config/koneksi.php';
                $tanggal = date("Y-m-d");
                if (isset($_POST['kirim'])) {
                    $nik = htmlspecialchars($_SESSION['nik']);
                    $judul_laporan = htmlspecialchars($_POST['judul_laporan']);
                    $isi_laporan = htmlspecialchars($_POST['isi_laporan']);
                    $status = 0;
                    $foto = $_FILES['foto']['name'];
                    $tmp = $_FILES['foto']['tmp_name'];
                    $lokasi = '../assets/img/';
                    $nama_foto = rand(0, 999) . '-' . $foto;

                    move_uploaded_file($tmp, $lokasi . $nama_foto);
                    $query = mysqli_query($koneksi, "INSERT INTO pengaduan VALUES ('','$tanggal','$nik','$judul_laporan','$isi_laporan','$nama_foto','$status')");

                    echo " <script> alert('Data Berhasil Dikirim'); window.location='index.php'; </script> ";
                }

                ?>
            </div>

        </div>
    </div>
    <div class="row">
         <div class="col-md-12 mt-3">
        <div class="card" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="card-header" style="font-family: fantasy; font-size: 24px; color: #146c43; padding-top: 10px; background: #d1e7dd;  box-shadow: 1px 1px #a3cfbb inset";>
                RIWAYAT PENGADUAN
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>JUDUL</th>
                                <th>ISI</th>
                                <th>FOTO</th>
                                <th>STATUS</th>
                                <th>AKSI</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $nik = $_SESSION['nik'];
                            $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE $nik='$nik' ORDER BY id_pengaduan DESC");
                            while ($data = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['judul_laporan'] ?></td>
                                    <td><?php echo $data['isi_laporan'] ?></td>
                                    <td><img src="../assets/img/<?php echo $data['foto'] ?>" width="100"></td>
                                    <td>
                                        <?php
                                        if ($data['status'] == 'proses') {
                                            echo "<span class='badge bg-warning'>Proses</span>";
                                        } elseif ($data['status'] == 'selesai') {
                                            echo "<span class='badge bg-success'>Selesai</span>";
                                        } else {
                                            echo "<span class='badge bg-danger'>Menunggu</span>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <!-- Button trigger modal hapus -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?php echo $data['id_pengaduan'] ?>">
                                            Hapus
                                        </button>

                                        <!-- Modal Hapus -->
                                        <div class="modal fade" id="hapusModal<?php echo $data['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="hapus_data.php" method="POST">
                                                        <input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'] ?>">
                                                        <div class="modal-body">
                                                            Apakah anda yakin akan menghapus data <br> <span class='text-black badge bg-warning'><?php echo $data['judul_laporan'] ?></span>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger" name="hapus_pengaduan">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>