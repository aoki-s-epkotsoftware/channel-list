<?php
require_once __DIR__ . '/function/db.php';
//入力を取得
$name = $_POST['channel_name'];
$icon = $_POST['channel_icon'];
$id = $_POST['channel_id'];
//チャンネルを追加するsql
$sql = "INSERT INTO channels(channel_name, channel_icon, channel_id) VALUES (:name, :icon, :id)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':icon', $icon);
$stmt->bindValue(':id', $id);
$stmt->execute();

header('Location: add_channel.php');
exit;
?>