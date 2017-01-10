<h2>List post</h2>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID</th>
			<th>Content</th>
		</tr>
	</thead>
	<tbody>
		<?php if (isset($listPost)): ?>
			<?php foreach ($listPost as $key => $value): ?>
				<tr>
					<td><?php echo ($key + 1); ?></td>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['content']; ?></td>
				</tr>
			<?php endforeach ?>
		<?php endif ?>
	</tbody>
</table>
