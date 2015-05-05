<fieldset>
<?php
if (@$_GET['n']) {
	$new = $db->prepare('SELECT * FROM news WHERE publish = ? AND slug = ?', ['0', $_GET['n']], 'App\Table\News', true); 
	if ($new): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>
					<?= $new['title'] ?>
					
				</h4>
				
			</div>
			<div class="panel-body">
				<?= $new['content'] ?>
			</div>
			<div class="panel-footer">
				<?= $new['author'] ?>
			</div>
		</div>
	<?php endif;
} else {
	echo "<legend>".$data['title']."</legend>";
	$news = $db->prepare('SELECT * FROM news WHERE publish = ?', ['0'], 'App\Table\News');
	foreach ($news as $new): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>
					<a href="<?= $data['slug'] ?>/news/<?= $new['slug'] ?>"><?= $new['title'] ?></a>
					
				</h4>
				
			</div>
			<div class="panel-body">
				<?= substr($new['content'], 0, 500) ?>...
				<a href="<?= $data['slug'] ?>/<?= $new['slug'] ?>"> Voir la suite</a>
			</div>
			<div class="panel-footer">
				<?= $new['author'] ?>
			</div>
		</div>
	<?php endforeach;
} ?>
</fieldset>