<a href="http://localhost/Myproject/MVC/?controller=post">Back to List</a>
<br><br>
<form action="http://localhost/Myproject/MVC/?controller=post&method=add" method="POST">
	Content: <input type="text" name="content"><br><br>
	<?php echo $message; ?>
	<input type="submit" name="btnSubmit" value="Submit">
</form>