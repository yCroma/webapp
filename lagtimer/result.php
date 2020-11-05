<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>リザルト</title>
</head>
<body>
    <header>
        <h1>リザルト画面</h1>
    </header>
    <main>
<?php
// POSTからスタートのDateTimeオブジェクトを取得
$enc_start = file_get_contents('temp');
$start = unserialize($enc_start);
print_r($start);
echo("</br>");
echo($start->format('H時i分s秒'));
echo("</br>");

// ページ生成時に終了時刻をDateTimeオブジェクトを取得
$timezone = new DateTimeZone('Asia/Tokyo');
$end = new DateTime('now', $timezone);
print_r($end);
echo("</br>");
echo($end->format('H時i分s秒'));
echo("</br>");
?>
        <form action="./index.php" method="POST">
        <input type="submit" value="もう一回遊ぶ！！">
        </form>
    </main>
</body>
</html>
