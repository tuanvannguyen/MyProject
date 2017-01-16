<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<a href="http://localhost/Myproject/MVC/?controller=post">Back to List</a>
	<br><br>
	<?php if (isset($data)): ?>
		<?php foreach ($data as $key => $value): ?>
			<form id="formAdd" action="http://localhost/Myproject/MVC/?controller=post&method=edit&id=<?= $value['id']?>" method="POST">
				Content: <input type="text" name="content" value="<?=$value['content'];?>"><br>
				<input type="submit" name="btnSave" value="Save">
			</form>
		<?php endforeach ?>
	<?php endif ?>
</body>
</html>