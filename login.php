<?php
    require_once('controllers/AuthController.php');
    $controller = new AuthController();
    if($controller->checkLoggedIn()){
        header('location: home');
    }
    if(isset($_POST['send'])){
        $result = $controller->login($_POST['email'], $_POST['password']);
        if($result){
            header('location: home');
        }
    }
    require_once('includes/auth/header.php');
?>

<div>
    <!-- code here -->
    <div class="card page-container">
        <div class="card-image">
            <div class="overlay"></div>
            <h2 class="card-heading">
                <img class="mb-3 rounded" src="img/lfp-logo.png" height="40"/>
                Login
                <small></small>
                <p class="text-white">
                    Login to your account to continue using our services.
                </p>
            </h2>
        </div>
        
        <form class="card-form" method="post">
            <?php if(isset($_POST['send']) && !$result){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $controller->error_message; ?>
                </div>
            <?php }?>
            <div class="input">
                <input type="text" class="input-field" name="email" required/>
                <label class="input-label">Email</label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="password" required/>
                <label class="input-label">Password</label>
            </div>
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-sm fw-bold" style="color: #007d00;">Forgot password?</a>
            </div>
            <div class="action">
                <button class="action-button" type="submit" name="send">Login</button>
            </div>
        </form>
        <div class="card-form text-center">
            Don't have an account already?
            <a href="register" style="color: #007d00;">Register</a>
        </div>
        <div class="card-info">
            <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
        </div>
    </div>
</div>

<?php
    require_once('includes/auth/footer.php');
?>