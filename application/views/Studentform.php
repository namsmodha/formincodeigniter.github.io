<!DOCTYPE html>
<html>
<head>
	<title>Student form</title>
</head>
<body>
	
	<form method="post" action="student/getData">
		<label for="name">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="name" required=""><br>
		<label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="email" name="email" required=""><br>
		<label for="phone">Phone:</label>&nbsp;&nbsp;&nbsp;
		<input type="text" name="phone" required=""><br>
		<label for="zipcode">Zipcode:</label>
		<input type="text" name="zipcode" required=""><br>
		<label for="hobbies">Hobbiess:</label><br>
		<input type="checkbox" name="hobbiess" value="Movies">Movies<br>
		<input type="checkbox" name="hobbiess" value="Football">Football<br>
		<input type="checkbox" name="hobbiess" value="Swimming">Swimming<br>
		<input type="checkbox" name="hobbiess" value="Music">Music<br>

		<input type="submit" value="Add"/>

			<button type="reset" value="Reset">Cancel</button>
			
	</form>
	
</body>
</html>