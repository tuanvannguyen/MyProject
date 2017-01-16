<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>List post</h2>
	<a href="http://localhost/Myproject/MVC?controller=post&method=add">Add new post</a>
	<br><br>
	<form action="#" method="post">
		Content: <input type="text" name="search"/><br/>
		<input type="submit" value="Search" name="btn_Search"/>
	</form>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Content</th>
				<th>Chose</th>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($listPost)): ?>
				<?php foreach ($listPost as $key => $value): ?>
					<tr>
						<td><?php echo ($key + 1); ?></td>
						<?php $value['id']; ?>
						<td><?php echo $value['content']; ?></td>
						<td>
							<a href="http://localhost/Myproject/MVC?controller=post&method=edit&id=<?= $value['id']?>">Edit |</a> 
							<a href="http://localhost/Myproject/MVC?controller=post&id=<?= $value['id']?>" onclick = "return confirm('Are you sue ?')">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			<?php endif ?>
		</tbody>
	</table>
</body>
</html>
