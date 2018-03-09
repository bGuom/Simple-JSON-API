# Simple-JSON-API
Simple JSON API to work with MySQL database, developed using PHP
V.1.0.18.3 
Author : Buddhi Gunarathne https://github.com/bGuom 
Contact : dbguom@gmail.com 

## LOCALHOST  INSTALLATION GUIDE

Clone this project
Create new database names as 'simpleapi' in phpmyadmin
Import 'simpleapi.sql' file to the database
Copy simpleapi folder to the htdocs folder
Visit 'localhost/simpleapi'


## JSON API GUIDE 

API URL path >> **simpleapi/[command]**

Create New Name in Database 
API URL path >> **simpleapi/new?name=NAME** 
where NAME is the name of the new user 
Example Result :
>[result:success]


Get all usernames in Database 
API URL path >> **simpleapi/getall** 
Example Result :
>[{"ID":"1","NAME":"john"},{"ID":"2","NAME":"David"},{"ID":"3","NAME":"Max"},{"ID":"4","NAME":"Rox"},{"ID":"5","NAME":"Peter"}]


Get username for specific id 
API URL path >> **simpleapi/get?id=ID** 
where ID is the id of the user 
Example Result :
>[{"ID":"5","NAME":"Peter"}]

