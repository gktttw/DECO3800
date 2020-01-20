deco3800-Subs2pewds

The structure of this project

1. GO https://fullcalendar.io/ and download the FullCalendar package to your local directory
2. put 'background-events.html' in /demos/
3. GO https://fontawesome.com/v4.7.0/  and download the font-awesome 4.7 
3. GO https://github.com/JulietaUla/Montserrat/tree/master/fonts/ttf and download the package
4. GO https://fontmeme.com/fonts/poppins-font/ and download the package
5. create a folder called 'fonts' and put it in the same folder with 'index.html' and 'registration.html'
6. PUT 'font-awesome 4.7','montserrat',and 'poppins' into a 'fonts'

This is what a standard codeigniter application looks like

+-- wp
|   +-- application
|	|	+-- this is where the basic config stuff is
|		|
|		|	Basic configuration set up:
|		|	all you have to do is to read the codeigniter spec to get the idea how this framework works
|		|	First, in the config folder, you need to change the database.php in it
|		|	if you want to chnage the route go to the route.php
|		|	of if you changed the name of the folder "wq" then you'll need to change the base url as well
|		|	go to config.php to change the base url
|		|
|		|	Start cracking the code:
|		|	This is a MVC framework to ensure you have the MVC development kinda sense
|		|	The view are the folder that shows the information to the user
|		|	The controllers are the commadar of this application that handles all the exchange of informaiton
|		|	The momdels are the guys who interact with database
|		|				!!!!! GOOD LUCK !!!!!
|       +-- view
|       |   login.php
|       |    registration.php
|       |        create home page so after login sucessfully, redirect users to homepage and the homepage would be the js calendar   |                  stuff
|               
|       +-- controller
|       |   home.php
|       |       it handles the login sign up process, do what ever you like and add more contorllers.
|
|       +-- model
|       |   Auth.php
|       |       It querys the database for user info, verifies logins.
|
|			
|	+-- assets
|	|	+-- css
|	|	+-- js
|	|	+-- some other stuff you want to import
|		|	this is where the css js or what ever you want to be imported to the views
|		|	be sure of the path you are using is correct, check the code that I wrote, you'll get the idea
|		
|	+-- SQL (not important)
|	+-- system (not important)
|	+-- uploads (not important)


Live version on AWS EC2
http://ec2-3-135-234-245.us-east-2.compute.amazonaws.com/deco3800-Subs2pewds/wq/

	
