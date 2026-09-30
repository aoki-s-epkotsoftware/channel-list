<?php
require_once __DIR__ . '/function/db.php';
//
$id = $_GET['id'];
$sql = "DELETE FROM channels WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

header('Location: channels.php');
exit;