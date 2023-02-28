<div class="" style=" padding-top: 70px;">
    <div class="col-md-4 offset-md-1" style=" width: 30%;">
        <div class="card" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); background: #F9F5E7;"; >
        <img src="assets/img/avatar.png" class=avatar style="left: 160px; top: -45px; position: absolute; width:120px;">
            <div class="login-box" style="text-align: center ";>
                <h2 style="font-family: fantasy; font-size: 37px; padding-top: 60px; color: #395144;">LOGIN</h2>
            </div>
            <div class="card-body" style="padding-top: 20px;">
                <form action="config/aksi_login.php" method="POST">
                    <div class="mb-3" >
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" style="padding-top: 50px;">
            <button type="submit" name="kirim" class="btn btn-primary" style="box-shadow: 0 4px 3px 0 rgba(0,0,0,0.2), 0 6px 10px 0 rgba(0,0,0,0.19); font-weight: 900; background: #395144; border-color: #395144;">LOGIN</button>
            <a href="index.php?page=registrasi" class="m-4" style="font-size: 12px;font-family: Poppins;"><p>Belum Punya Akun? Klik aja!</p></a>
        </div>
       
        </form>
    </div>
</div>
</div>





