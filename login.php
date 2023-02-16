<div class="row mt-3" style="padding-top: 70px; ">
    <div class="col-md-4 offset-md-4">
        <div class="card" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)";>
            <div class="card-header" style="background: #000000; text-align: center ";>
                <h2 style="color: #ffffff;">LOGIN</h2>
            </div>
            <div class="card-body">
                <form action="config/aksi_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                    
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" name="kirim" class="btn btn-primary" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">LOGIN</button>
            <a href="index.php?page=registrasi" class="m-3">Belum Punya Akun? Klik aja!</a>
        </div>
       
        </form>
    </div>
</div>
</div>