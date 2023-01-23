<!DOCTYPE html>
<html>

<head>
    <title>Login | Aplikasi Penggajian</title>
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!-- CDN FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?php echo base_url(); ?>assets/js/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="<?php echo base_url(); ?>assets/image/logo.jfif">
        </div>
        <div class="login-content">
            <form class="user" method="POST" action="<?php echo base_url('admin/dashboard') ?>">

                <h2 class="title">APLIKASI PENGGAJIAN</h2>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username </h5>
                        <input type="text" class="input" name="username">

                    </div>
                    <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password </h5>
                        <input type="password" class="input" name="password">
                        <h5><?php echo form_error('password', '<div class="text-small text-danger"></div>') ?></h5>
                    </div>
                </div>
                <button type="submit" class="btn" value="Login">Login</button>

            </form>
        </div>
    </div>

</body>
<!-- CDN Font-awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>

</html>