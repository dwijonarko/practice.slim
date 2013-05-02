<h2>Edit</h2>
<form action="/<?php echo $task->id ?>/edit" method="POST">
	<label for="name">Name</label><input type="text" name="name" value="<?php echo $task->name ?>"><br>
	<?php if ($task->done===1): ?>
		<input type="checkbox" name="done" value=1 checked="true">Done<br>	
	<?php else: ?>
		<input type="checkbox" name="done" value=1 >Done<br>	
	<?php endif ?>
	<input type="submit" name="submit" value="save">
</form>