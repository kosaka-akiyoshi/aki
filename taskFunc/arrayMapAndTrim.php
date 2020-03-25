
<?php
    $params = [" 山田 ", " 太郎 ", " プログラマ  "];
    echo("<pre>");
    var_dump($params);
    echo("</pre>");
    $trimedParams = array_map("trim", $params); 
    echo("<pre>");
    var_dump($trimedParams);
    echo("</pre>");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
</body>
<body>
</body>
</html>
