<?php
    require_once('includes/auth/header.php');
?>

<div>
    <!-- code here -->
    <div class="card page-container">
        <div class="card-image">
            <div class="overlay"></div>
            <h2 class="card-heading">
                <img class="mb-3 rounded" src="img/lfp-logo.png" height="40"/>
                Reset Password
                <small></small>
                <p class="text-white">
                    Please input a new password for your account.
                </p>
            </h2>
        </div>
        
        <form class="card-form" style="padding-bottom: 2rem;">
            <div class="input">
                <input type="password" class="input-field" required/>
                <label class="input-label">Password</label>
            </div>

            <div class="input">
                <input type="password" class="input-field" required/>
                <label class="input-label">Confirm Password</label>
            </div>
            
            <div class="action">
                <button class="action-button" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Reset password</button>
            </div>
        </form>
        
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="d-flex flex-column align-items-center" style="padding-top: 3rem; padding-bottom: 3rem;">
            <div class="mb-3 text-center d-flex flex-column align-items-center">
                <img src="img/illustration-confetti.svg" class="rounded-pill p-3" style="background-color: #00b300;" width="100" />
                <h4 class="mt-3" style="color: #00b300;">Password Reset Successful!</h4>
            </div>
            
            <div class="action">
                <a class="action-button" href="login">Back to Login</a>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<?php
    require_once('includes/auth/footer.php');
?>