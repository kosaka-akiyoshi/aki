<?php

/**
 * 表示を行う
 * 
 * @param  string $string
 * @return null
 */
function display(string $string, string $color)
{
    echo ('<p style="color: ' . $color . '">' . $string . '</p>');
}

// ここに回答を追記
$color = 'black';
// 黒色の文字色の場合は'black'
// 赤色の文字色の場合は'red'
// 青色の文字色の場合は'blue'
// 緑色の文字色の場合は'green'
if(isset($_COOKIE['color'])){
    $color = $_COOKIE['color'];
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskCookieImplement</title>
    </head>
    <body>
        <?php display('とことん調べる！それがスキルアップの秘訣！！', $color); ?>
        <button onclick="location.href='taskCookieSetColor.php?color=blue'">
            青
        </button>
        <button onclick="location.href='taskCookieSetColor.php?color=red'">
            赤
        </button>
        <button onclick="location.href='taskCookieSetColor.php?color=green'">
            緑
        </button>
        <button onclick="location.href='taskCookieSetColor.php'">
            クリア
        </button>
    </body>
</html>