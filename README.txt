Development Stack
- HTML, CSS, JQUERY, JAVASCRIPT, PHP, MYSQL

Installation Process
- Import .sql file into a database
- Unzip "lassa-fever-location-predictor-project" folder in your working server directory
- Edit the .env file in the project directory with the credentials to the database
- open the url in a browser

How the System works:
- Database Structure
	- The database has four tables (ghas, locations, presence_reports, user)
	- User Table: this tables holds records(name, email, password) of all users who have registered on the platform.
	- Locations Table: this table holds the output of the model(longitude, latitude, probability_score)
	- Presence_Reports Table: this table holds the records of reported presence by users of the system
	- ghas table: this table holds record of all the government agencies across the different states in Nigeria which is showed to a user in a case of a reported heavy presence.

- System Structure
	- The system follows an MVC (Model-View-Controller) structure.
	- The model folder in the root project folder, contains the libraries for handling database connection and session management.
	- The controller folder in the root project folder, serves a bridge between the frontend(pages) and the backend(database). It handles request from users, retrieves information from database and performs the system logics.
	- The pages are on the root folder of the system.
	- The index.php page is the welcome page(landing page) of the system.
	- The login.php page is the screen for logging in into the system
	- The register.php page is the screen for registering on the system
	- The home.php page is the main screen that shows the map and the predicted locations
	- The about.php page is the screen that shows the brief explanation of the project
	- The send_report.php is the screen to report presence of lassa fever to the administrators of the system.

- How the Home Screen Works
	- On opening the Home Screen, The locations are retrieved from the database.
	- using the jquery leaflet map library, the coordinates are mapped on the map with the probability score and the coordinates as tooltips.
	- The center of the map is derived by getting the average of the longitutde and latitude values retrieved from the database, with a zoom of 8 and a maxZoom of 18.
