
<?php
require '../../app/controllers/LoginController.class.php';

?>
<?php include '../views/inc/header.inc.php'; ?>
<style>
html,body{
background-image: url('../../imgs/login.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
</style>
 <div class="login-dark" style="height: 695px;">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" name="user" type="text" name="email" placeholder="username"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="password"></div>
            <div class="form-group"><button type="submit" value="Login"  class="btn btn-primary btn-block">Log In</button></div><a class="forgot" href="../../app/controllers/SendMail.php">Forgot your email or password?</a>
     </form>
    </div>
<?php include '../views/inc/footer.inc.php'; ?>