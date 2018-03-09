
<html>
<head>
	<title>Simple API</title>
	
</head>
<body>
	Simple JSON API EXAMPLE
</br>
V.1.0.18.3
</br>
Author : Buddhi Gunarathne <a href ="https://github.com/bGuom"> https://github.com/bGuom </a>
</br>
Contact : dbguom@gmail.com
</br>

<hr>
</br>
API URL path >> simpleapi/[command] 
</br>
</br>
Create New Name in Database
</br>
API URL path >> <strong>simpleapi/new?name=NAME</strong>
</br>
where NAME is the name of the new user
</br>
Example Result : <pre>[result:success]</pre>
</br>
</br>
Get all usernames in Database
</br>
API URL path >> <strong>simpleapi/getall</strong>
</br>
Example Result : <pre>[{"ID":"1","NAME":"john"},{"ID":"2","NAME":"David"},{"ID":"3","NAME":"Max"},{"ID":"4","NAME":"Rox"},{"ID":"5","NAME":"Peter"}]</pre>
</br>
</br>
Get username  for specific id 
</br>
API URL path >> <strong>simpleapi/get?id=ID</strong>
</br>
where ID is the id of the user
</br>
Example Result : <pre>[{"ID":"5","NAME":"Peter"}]</pre>


<div align="right"><pre>MYSQL PHP HTML</pre></div>
		
</body>
</html>