<?php
require_once __DIR__ . '/function/db.php';
//すべてのチャンネルを取得
$sql = "SELECT * FROM channels";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$channels = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/categories.css">
    <title>channels</title>
</head>

<body>
    <h1>カテゴリ名</h1>
    <table>
        <?php foreach ($channels as $channel):
            $id = $channel['id'];?>
            <!-- あとでjsで一行のどこをクリックしてもリンクできるようにする -->
            <tr>
                <td>
                    <div id="channel-icon">
                        <img src="<?= $channel['channel_icon']; ?>">
                    </div>
                </td>
                <td>
                    <a href="https://www.youtube.com/channel/<?= $channel['channel_id']; ?>">
                        <?= $channel['channel_name']; ?>
                    </a>
                </td>
                <td>
                    <a href="channel_delete.php?id=<?= $id; ?>">削除</a>
                </td>
        <?php endforeach; ?>
    </table>
    <a href="add_channel.php">新規ch登録</a>
</body>

</html>