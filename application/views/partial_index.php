<?php 
	foreach($notes as $note)
	{ ?>
		<div class="notes">
			<form action="/notes/delete" method="post">
				<input type="hidden" name="id" value="<?= $note['id']?>">
				<button type="submit" class="btn btn-danger">X</button>
			</form>
			<form action="/notes/update" method="post">
				<h2 class="title"><?= $note['title'] ?></h2>
				<textarea name="description"><?= $note['description']?></textarea>
				<input type="hidden" name="id" value="<?= $note['id']?>">
			</form>
		</div>
<?php } ?>