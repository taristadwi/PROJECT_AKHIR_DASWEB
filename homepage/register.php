<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <!-- login start -->
        
 <?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, email,telepon, password)
                    VALUES ('$username', '$email','$telepon', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $telepon ="";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?> 
 
<div class="container register">
<div class="row">
<div class="col-md-3 register-left">
<img src="login.png" alt="" />
<h3>Welcome</h3>
</div>
<div class="col-md-9 register-right">
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="login-tab" data-toggle="tab" href="login.php" role="tab" aria-controls="login" aria-selected="true">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" id="newuser-tab" data-toggle="tab" href="register.php" role="tab" aria-controls="newuser" aria-selected="false">New User</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
<h3 class="register-heading">Register</h3>
<div class="row register-form">
<div class="col-md-12 profile_card">
    <form class="form-inline" action="" method="POST">
    <div class="form-group">
        <i class="fa fa-envelope-o"></i>
        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>"  style="margin-right:20px;"/>
    </div>
    <div class="form-group">
             <i class="fa fa-lock"></i>
        <input type="password" class="form-control" name="password" placeholder="Password *" value="<?php echo $_POST['password']; ?>" style="margin-right:20px;"/>
    </div>
    <div class="form-group">
        <i class="fa fa-envelope-o"></i>
        <input type="password" class="form-control" name="cpassword" placeholder="Konfirmasi Password" value="<?php echo $_POST['cpassword']; ?>"  style="margin-right:20px;"/>
    </div>
    <div class="form-group"style="margin-top:20px;">
        <i class="fa fa-envelope-o"></i>
        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $email; ?>"  style="margin-right:20px;"/>
    </div>
    <div class="form-group"style="margin-top:20px;">
             <i class="fa fa-lock"></i>
        <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $_POST['telepon']; ?>" style="margin-right:20px;"/>
    </div>
    <div class="float-right"style="margin-top:20px;">
      <input type="submit" name="submit" class="btn btn-primary" value="Register" />
      </div>
      </form>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>