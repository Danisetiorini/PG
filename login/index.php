<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</div>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>
        <div class="artikel">
           <form action="<?php echo site_url ('user/login') ?>" method="POST">
                <div class="grup">
                    <label for="Username">Username</label>
                    <input type="text" placeholder="Masukkan username anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password anda">
                </div>
                <?php echo $this->session->flashdata('er')?>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
