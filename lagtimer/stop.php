<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Stop</title>
</head>
<body>
    <header>
        <h1>時間になったと思ったらストップボタンを押してね！！</h1>
    </header>
    <main>
        <form action="./result.php" method="POST">
<?php
$timezone = new DateTimeZone('Asia/Tokyo');
$start = new DateTime('now', $timezone);
$enc_start = serialize($start);
file_put_contents('temp', $enc_start);
?>
        <input type="submit" value="ストップ！！">
        </form>
    </main>
</body>
</html>
