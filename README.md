# chatApp
This is a web based chat application which is designed to be responsive to devices of varying sizes.

This package inclues 6 php files:

index.php - Prompts the user to login on first load and presents the user with the chat window until the user logs out from the session.

insert.php - Establishes the connection with MySQL database, inserts username and message into the table. Queries the table to retrieve the stored data and sends back the caller.

logs.php -  Called to refresh the user interface asynchronously.

login.php - Connects with the database to validate user login.

logout.php - Destroys user session on logout.

register.php - Provides the form element for the user to register for an account.Establishes the connection with MySQL database, inserts username,password and a unique user id. Performs validation, and on successful registration redirects user to the login page.
               
The package could be used on client-server frameworks, such as XAMPP,WAMPP,Bitnami etc.,(Apache server,MySQL)

MySQL has a database with 2 tables to hold logs information and user information.
