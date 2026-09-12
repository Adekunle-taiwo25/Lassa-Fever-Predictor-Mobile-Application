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
                Confirm Email Address
                <small></small>
                <p class="text-white">
                    Please confirm your email address before resetting your password.
                </p>
            </h2>
        </div>
        
        <form class="card-form" style="padding-bottom: 2rem;" action="reset-password">
            <div class="input">
                <input type="text" class="input-field" required/>
                <label class="input-label">Email</label>
            </div>
            
            <div class="action">
                <button class="action-button" type="submit">Confirm Email Address</button>
            </div>
        </form>
        
        <div class="mx-2 d-flex justify-content-center">
            <a href="login" class="btn btn-sm p-2 fw-bold" style="color: #007d00;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
                </svg>
                Back to Login
            </a>
        </div>
    </div>
</div>

<?php
    require_once('includes/auth/footer.php');
?>