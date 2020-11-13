<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Register</title>
    <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/vendor/fontawesome-free/css/fontawesome.min.css'?>" rel="stylesheet">
    <!-- Custom template for register page -->
    <link href="<?php echo base_url().'assets/css/loginregis.css'?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="signup-form">
        <span class="d-none alert alert-success mb-3" id="res_message">Thank You For Registering</span>
        <form id="form-register" role="form" method="post">
            <h2>Create Account</h2>
            <p class="lead">It's free and hardly takes more than 30 seconds.</p>
            <div class="form-group">
                <span class="input-group-addon"><i class="fas fa-user-lock"></i></span>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="required">
                <span id="user-availability-status"></span>
            </div>
            <div class="form-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="required">
            </div>
            <div class="form-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Telephone" required="required">
            </div>
            <div class="form-group">
                <button type="submit" id="submit_form" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
        </form>
        <div class="text-center">Already have an account? <a href="<?php echo base_url().'auth'?>">Login here</a>.</div>
    </div>
    
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    <!-- Custom script for register page -->
    <script src="<?php echo base_url().'assets/js/register.js'?>"></script>
        
</body>
</html>