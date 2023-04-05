<?php

require_once('conn.php');

$stmt = $mysqli->prepare("INSERT INTO `pokemon` (`id`, `name`, `type1`, `type2`, `height`, `weight`, `photo`) values (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('isssdds', $_POST['id'], $_POST['name'], $_POST['type1'], $_POST['type2'], $_POST['height'], $_POST['weight'], $_POST['photo']);
$stmt->execute();

header('Location: /');

?>