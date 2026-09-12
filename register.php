<?php
    require_once('controllers/AuthController.php');
    $controller = new AuthController();
    if($controller->checkLoggedIn()){
        header('location: home');
    }
    if(isset($_POST['send'])){
        $result = $controller->register($_POST['fullName'], $_POST['email'], $_POST['password']);
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
                Get started
                <small></small>
                <p class="text-white">
                    Creating an account helps us personalize your activities and provide you with customized services.
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
                <input type="text" class="input-field" name="fullName" required/>
                <label class="input-label">Full name</label>
            </div>
            <div class="input">
                <input type="email" class="input-field" name="email" required/>
                <label class="input-label">Email</label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="password" required/>
                <label class="input-label">Password</label>
            </div>
            <div class="action">
                <button class="action-button" type="submit" name="send">Get started</button>
            </div>
        </form>
        <div class="card-form text-center">
            Have an account already?
            <a href="login" style="color: #007d00;">Login</a>
        </div>
        <div class="card-info">
            <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
        </div>
    </div>
</div>

<?php
    require_once('includes/auth/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="d-flex flex-column align-items-center" style="padding-top: 3rem; padding-bottom: 3rem;">
            <div class="mb-3 text-center d-flex flex-column align-items-center">
                <img src="img/illustration-confetti.svg" class="rounded-pill p-3" style="background-color: #00b300;" width="100" />
                <h4 class="mt-3" style="color: #00b300;">Registration Successful!</h4>
            </div>
            
            <div class="action">
                <a class="action-button" style="text-decoration: none;" href="login">Proceed to Login</a>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<?php if(isset($_POST['send']) && $result){ 
    echo '<script> $(document).ready(function(){ $("#staticBackdrop").modal("show"); }); </script>';   
}?>
    
