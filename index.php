<?php
require_once 'app/init.php';
$itemsQuery = $db->prepare("
	SELECT id, name, done
	FROM items
");
$itemsQuery->execute();
$items = $itemsQuery->rowCount() ? $itemsQuery : [];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>To do</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class="indexBackgroundImage">
		<div class="list">
			<h1 class="header">To Do</h1>
			<?php if(!empty($items)): ?>
			<ul class="items">
				<?php foreach($items as $item): ?>
					<li>
						<span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
						<?php if(!$item['done']): ?>
							<a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Done</a>
						<?php else: ?>
							<a href="mark.php?as=notdone&item=<?php echo $item['id']; ?>" class="done-button">Undo</a>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
				<p>You haven't added any items!</p>
			<?php endif; ?>
			<form class="item-add" action="add.php" method="post">
				<input type="text" name="name" placeholder="Add a new To Do" class="input" autocomplete="off" required />
				<br />
				<input type="submit" value="Add" class="submit" />
			</form>
		</div>
	</body>
</html>
