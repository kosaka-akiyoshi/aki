
<?php
    function concatenate(string $firstName, string $lastname, string $space = ""): string
    {
        return $lastname.$space.$firstN ame;
    }

    $nameParam1 = ["太郎","山田","・"];
    $name1 = concatenate(...$nameParam1);
    echo("・で結合: ".$name1);
    $nameParam2 = ["太郎","山田"];
    $name2 = concatenate(...$nameParam2);
    echo("<br>空文字で結合: ".$name2);


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
