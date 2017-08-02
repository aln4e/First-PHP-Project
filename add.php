<?php
require_once 'app/init.php';
if(isset($_POST['name'])) {
	$name = trim($_POST['name']);
	if(!empty($name)) {
		$addedQuery = $db->prepare("
			INSERT INTO items (name, user, done, created)
			VALUES (:name, 1, 0, NOW())
		");
		$addedQuery->execute([
			'name' => $name,
		]);
	}
}
header('Location:index.php');
