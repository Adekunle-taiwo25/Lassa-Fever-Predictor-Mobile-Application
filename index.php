<?php
    require_once('controllers/AuthController.php');
    $controller = new AuthController();
    if($controller->checkLoggedIn()){
        header('location: home');
    }
?>
<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Lassa Fever Predictor</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <!-- <link rel="icon" href=""> -->

    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div id="loader" class="middle">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
        <div class="bar bar4"></div>
        <div class="bar bar5"></div>
        <div class="bar bar6"></div>
        <div class="bar bar7"></div>
        <div class="bar bar8"></div>
    </div>

    <div class="splash-screen page-container">
        <div class="splash-overlay"></div>
        <div style="z-index: 2;">
            <!-- <div class="mb-3 d-flex justify-content-center">
                <img class="mb-3 rounded" src="img/lfp-logo.png" height="80"/>
            </div> -->
            <div class="text-center text-white" style="margin-bottom: 2rem;">
                <h2 style="font-size: 54px; font-weight: 600;">LASSA FEVER LOCATIONS PREDICTOR<span style="font-size: 18px; font-weight: 600;"> ©</span></h2>
                <h6 style="font-size: 18px;">By Adekunle Taiwo Adenike.</h6>
            </div>
    
            <div class="mb-3 text-center">
                <a class="btn btn-sm text-white px-3 py-2 w-50" style="background-color: #099709; font-size: 18px;" href="login">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
                    </svg> 
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    <script>
        document.onreadystatechange = function () {
            if (document.readyState !== "complete") {
                document.querySelector("body").style.visibility = "hidden";
                document.getElementById("loader").style.visibility = "visible";
            } else {
                setTimeout(() => {
                document.getElementById("loader").style.display ="none";
                document.querySelector("body").style.visibility = "visible";
                }, 3000)
            }
        };
    </script>
</html>

