<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<a href="http://localhost/Myproject/MVC/?controller=post">Back to List</a>
	<br><br>
	<form id="formAdd" action="http://localhost/Myproject/MVC/?controller=post&method=add" method="POST">
		Content: <input type="text" name="content"><br>
		<?php echo $message; ?>
		<input type="submit" name="btnSubmit" value="Submit">
	</form>
</body>
</html>