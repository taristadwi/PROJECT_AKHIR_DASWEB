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
     $password = md5($_POST['password']);
  
     $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['username'] = $row['username'];
         header("Location: berhasil_login.php");
     } else {
         echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
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
<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" id="newuser-tab" data-toggle="tab" href="register.php" role="tab" aria-controls="newuser" aria-selected="false">New User</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
<h3 class="register-heading">Login</h3>
<div class="row register-form">
<div class="col-md-12 profile_card">
    <form class="form-inline" action="" method="POST">
    <div class="form-group">
        <i class="fa fa-envelope-o"></i>
        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>"  style="margin-right:20px;"/>
    </div>
    <div class="form-group">
             <i class="fa fa-lock"></i>
        <input type="password" class="form-control" name="password" placeholder="Password *" value="<?php echo $_POST['password']; ?>" style="margin-right:20px;"/>
    </div>
    <div class="float-right">
      <input type="submit" name="submit" class="btn btn-primary" value="Login" />
      </div>
      </form>
</div>
</div>
</div>
<div class="tab-pane fade show" id="register" role="tabpanel" aria-labelledby="newuser-tab">
<h3 class="register-heading">New User</h3>
<div class="row register-form">
<div class="col-md-6">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="First Name *" value="" />
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Last Name *" value="" />
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Email *" value="" />
    </div>
    <div class="form-group">
        <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
    </div>

</div>
<div class="col-md-6">
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Password *" value="" />
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
    </div>
     <div class="float-right">
    <input type="submit" class="btn btn-primary" value="Register" />
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>