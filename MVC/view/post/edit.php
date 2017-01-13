<?php 
	echo $data['content'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<a href="http://localhost/Myproject/MVC/?controller=post">Back to List</a>
	<br><br>
	<form id="formAdd" action="http://localhost/Myproject/MVC/?controller=post&method=edit&id=<?= $data['id']?>" method="POST">
		Content: <input type="text" name="content" value="<?=$data['content'];?>"><br>
		<input type="submit" name="btnSubmit" value="Save">
	</form>
</body>
</html>