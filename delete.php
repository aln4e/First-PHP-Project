<?php
require_once 'app/init.php';
if(isset($_GET['as'], $_GET['item'])) {
	$as = $_GET['as'];
	$item = $_GET['item'];

	switch($as) {
		case 'delete':
			$doneQuery = $db->prepare("
				DELETE FROM items
				WHERE id = :item
			");
			$doneQuery->execute([
				'item' => $item
			]);
		break;
	}
}
header('Location: index.php');
