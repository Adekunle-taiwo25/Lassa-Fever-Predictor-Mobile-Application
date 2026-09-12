<?php
    require_once('controllers/AboutController.php');
    $controller = new AboutController();
    if(!$controller->checkLoggedIn()){
        $controller->logout();
    }
    require_once('includes/header.php');
?>

<div class="top-nav p-3 w-100 d-flex justify-content-between">
    <div class="d-flex gap-3">
        <div class="align-self-center">
            <h6 class="page-title">ABOUT THE APP</h6>
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
          
    <div class="px-3 py-5">
        <div class="text-start mb-4">
            <h6 class="mb-0">Lassa Fever Predictor Project by:</h5>
            <h2><a href="#" style="text-decoration: none; color: #007d00">Adekunle Taiwo Adenike</a><h2>
        </div>

        <p class="about-text">
            The project centers on developing an innovative application designed to empower 
            public health experts in efficiently navigating regions in Nigeria for field surveys related 
            to potential Lassa fever outbreaks. The application leverages historical data on locations where 
            the multimammate rat (Mastomys natalensis), the primary host of the Lassa fever virus, has been 
            documented. By offering a geospatial guide, this tool enables users to pinpoint high-risk areas, 
            optimize survey routes, and allocate resources more effectively.

        </p>
        <h4 class="text-start my-4">Benefits for Public Health and Government Agencies</h4>
        <p class="about-text">
            The application is a critical tool for proactive health management. It allows government authorities
            and healthcare practitioners to monitor high-risk zones and plan timely interventions before outbreaks
            occur. By identifying patterns and trends in the presence of the rat host, the application provides
            actionable insights for implementing preventive measures, such as community sensitization,
            environmental sanitation, and strategic deployment of healthcare resources.
        </p>
        <h4 class="text-start my-4">Key Features</h4>
        <ul>
            <li>
                <p class="about-text">
                    <b>Interactive Geospatial Mapping:</b>
                    The application features a user-friendly interface with interactive maps highlighting areas 
                    with a history of Mastomys natalensis presence. Users can zoom in on specific regions, view 
                    associated environmental and climatic conditions, and assess potential risks.
                </p>
            </li>
            <li>
                <p class="about-text">
                    <b>Field Survey Navigation:</b>
                    Public health teams can use the app to navigate efficiently to priority locations for 
                    sample collection and data gathering, minimizing time and effort.
                </p>
            </li>
            <li>
                <p class="about-text">
                    <b>Predictive Risk Analysis:</b>
                    Powered by machine learning models, the app predicts potential hotspots based on historical 
                    and environmental data, guiding users to areas where intervention may be most impactful.
                </p>
            </li>
            <li>
                <p class="about-text">
                    <b>Feedback Feature: "Report Presence":</b>
                    A standout feature of the application is its "Report Presence" functionality, which allows 
                    users to contribute real-time data during field surveys. Public health experts and other users 
                    can record observations of Mastomys natalensis in specific areas, providing crucial feedback 
                    to the system. This feature enhances the application's accuracy and adaptability by incorporating 
                    the following benefits:
                    <ul>
                        <li class="about-text">
                            <b>Improved Model Performance:</b> Real-time data updates allow the application to refine its machine learning models, improving prediction accuracy over time.
                        </li>
                        <li class="about-text">
                            <b>Crowdsourced Validation:</b> Field data serves as a verification layer, cross-referencing model predictions with actual observations.
                        </li>
                        <li class="about-text">
                            <b>Dynamic Risk Mapping:</b> Continuous input ensures the risk maps remain current and responsive to changes in the rats’ habitat or distribution patterns.
                        </li>
                    </ul>
                </p>
            </li>
        </ul>
        <h4 class="text-start my-4">Transformative Impact</h4>
        <p class="about-text">
        This application represents a leap forward in the fight against Lassa fever. By enabling targeted action, enhancing preparedness, and fostering collaboration between public health experts and the government, the app not only improves outbreak management but also reduces the disease burden on affected communities. The inclusion of a feedback mechanism further ensures that the tool evolves dynamically, becoming increasingly effective with each user
        </p>
    </div>
</main>

<?php
    require_once('includes/footer.php');
?>