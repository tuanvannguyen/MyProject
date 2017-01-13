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
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID</th>
				<th>Content</th>
				<th>Chose</th>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($listPost)): ?>
				<?php foreach ($listPost as $key => $value): ?>
					<tr>
						<td><?php echo ($key + 1); ?></td>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['content']; ?></td>
						<td>
							<a href="http://localhost/Myproject/MVC?controller=post&method=edit&id=<?= $value['id']?>">Edit |</a> 
							<a href="" onclick = "return confirm('Are you sue ?')">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			<?php endif ?>
		</tbody>
	</table>
</body>
</html>
