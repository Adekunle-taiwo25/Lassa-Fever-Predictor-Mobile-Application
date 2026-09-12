<?php
    require_once('controllers/ReportController.php');
    $controller = new ReportController();
    if(!$controller->checkLoggedIn()){
        $controller->logout();
    }
    if(isset($_POST['send'])){
        $result = $controller->sendReport($_POST['state'], $_POST['lga'], $_POST['long'], $_POST['lat'], $_POST['is_present'], $_POST['degree_of_presence']);
    }
    require_once('includes/header.php');
?>

<div class="top-nav p-3 w-100 d-flex justify-content-between">
    <div class="d-flex gap-3">
        <div class="align-self-center">
            <h6 class="page-title">REPORT POSITIVE/NEGATIVE PRESENCE</h6>
        </div>
    </div>

    <div class="dropdown">
        <a class="btn btn-sm bg-white rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png" height="30" />
        </a>
        <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item" href="#">
            Hi, Bidemi🥳.
            </a>
        </li>
        <hr>
        <li>
            <form method="post">
                <button class="dropdown-item" type="submit" name="logout">
                    <span class="me-1">Logout</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                    </svg>
                </button>
            </form>
        </li>
        </ul>
    </div>
</div>

<main class="bg-white main-content">
    <div class="py-5">
        <div class="mx-3">
            <p class="about-text">
                Please fill the form below to send your feedback. Providing us with your feedback and field data helps improve our model.</p>
        </div>
        <hr>
        <form class="card-form" method="post">
            <?php if(isset($_POST['send']) && !$result){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $controller->error_message; ?>
                </div>
            <?php }?>
            <div class="input">
                <input type="text" class="input-field" name="state" required/>
                <label class="input-label">State</label>
            </div>

            <div class="input">
                <input type="text" class="input-field" name="lga" required/>
                <label class="input-label">LGA</label>
            </div>

            <div class="input">
                <input type="text" id="long" class="input-field" name="long" required/>
                <label class="input-label">Longitude</label>
            </div>

            <div class="input">
                <input type="text" id="lat" class="input-field" name="lat" required/>
                <label class="input-label">Latitude</label>
            </div>

            <div class="mt-3 text-start">
                <button id="gps_location" onclick="getLocation()" class="btn" type="button" style="background-color: #03fcc2; border: 1px solid #04b01b;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
                </svg>
                Get Location
                </button>
                <p id="message" class="mt-2"></p>
            </div>

            <div class="input">
                <select class="form-select form-control form-control-lg" name="is_present">
                    <option value="">Is Lassa Fever Present?</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="input">
                <select class="form-select form-control form-control-lg" name="degree_of_presence">
                <option value="">What's the level of presence?</option>
                <option value="very-high">Very High</option>
                <option value="high">High</option>
                <option value="low">Low</option>
                <option value="very-low">Very Low</option>
                </select>
            </div>
            
            <div class="action">
                <button class="action-button" type="submit" name="send">Confirm Email Address</button>
            </div>
        </form>
    </div>
</main>

<?php
    require_once('includes/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="d-flex flex-column align-items-center" style="padding-top: 2rem; padding-bottom: 3rem;">
            <div class="mb-3 text-center d-flex flex-column align-items-center">
                <img src="img/illustration-confetti.svg" class="rounded-pill p-3" style="background-color: #00b300;" width="80" />
                <h5 class="mt-3" style="color: #00b300;">Report sent successfully!</h5>
            </div>
            
            <div class="mt-2">
                <p style="text-align: justify;">
                    <?php echo $controller->report_message; ?>
                </p>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<?php if(isset($_POST['send']) && $result){ 
    echo '<script> $(document).ready(function(){ $("#staticBackdrop").modal("show"); }); </script>';   
}?>

<script>
    const message = document.getElementById("message");
    const long = document.getElementById("long");
    const lat = document.getElementById("lat");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition, showError);
        } else {
            message.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        lat.value = position.coords.latitude;
        long.value = position.coords.longitude;
    }
    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                message.innerHTML = "User denied the request for Geolocation."
            break;
            case error.POSITION_UNAVAILABLE:
                message.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                message.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                message.innerHTML = "An unknown error occurred."
                break;
        }
    }
</script>