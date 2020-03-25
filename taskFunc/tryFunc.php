<?php
    function multiplyArray(array $array) :float
    {
        $num = 1;
        foreach($array as $value) {
            $num *= $value;
        }
        return $num;
    }

    $list = [5, 4, 3, 6, 2, 7];
    $result =multiplyArray($list);
    echo("配列の結果 : ".$result);
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