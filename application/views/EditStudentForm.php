<!DOCTYPE html>
<html>
<head>
	<title>Manage Student form</title>
</head>
<body>
	<?php echo form_open('Admin/updateSingleStudentData');?>
	<input type="hidden" name="id" value="<?php echo $profile->id;?>">
	<form method="post">
		<label for="name">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="name" value="<?php echo $profile->name;?>" ><br>
		<label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="email" name="email" value="<?php echo $profile->email;?>" ><br>
		<label for="phone">Phone:</label>&nbsp;&nbsp;
		<input type="text" name="phone" value="<?php echo $profile->phone;?>" ><br>
		<label for="zipcode">Zipcode:</label>
		<input type="text" name="zipcode" value="<?php echo $profile->zipcode;?>" ><br>
		<label for="hobbiess">Hobbiess:</label><br>
		<input type="checkbox" name="hobbiess" value="Movies"value="<?php echo $profile->hobbiess;?>" >Movies<br>
		<input type="checkbox" name="hobbiess" value="Football"value="<?php echo $profile->hobbiess;?>" >Football<br>
		<input type="checkbox" name="hobbiess" value="Swimming"value="<?php echo $profile->hobbiess;?>" >Swimming<br>
		<input type="checkbox" name="hobbiess" value="Music"value="<?php echo $profile->hobbiess;?>" >Music<br>

		<input type="submit" value="Update"/>
	</form>
	<?php echo form_close(); ?>
</body>
</html>