<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/.css">
    <title>チャンネル追加</title>
</head>
<body>
    <form action="insert_channel.php" method="POST">
        <label>チャンネル名を入力</label>
        <input type="text" name="channel_name">
        <label>アイコン</label>
        <input type="text" name="channel_icon">
        <label>id</label>
        <input type="text" name="channel_id">
        <button type="submit">登録</button>
        <a href="channels.php">ch一覧</a>
    </form>
</body>
</html>