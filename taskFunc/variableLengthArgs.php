<?php
    function concatenate(string ...$name): string 
    {
        $concatenatedName = "";
        for($i = 0; $i < count($name); $i++) {
            $concatenatedName .= $name[$i];
            if($i != count($name) - 1) {
                $concatenatedName .= "・";
            }
        }
        return $concatenatedName;
    }

    $lastName = "太郎";
    $firstName ="山田";
    $name1 = concatenate($firstName, $lastName);
    echo("結合結果: ".$name1);
    $picasso = concatenate(
        "パブロ","ディアゴ","ホセ","フランシスコ","テ","パウラ","ファン","テ"
        ,"ネポムセーノ","マリア","デ","ロス","レメディオス","シプリアノ","デ"
        ,"ラ","サンティマ","トリニダード","ルイス","ピカソ"
    );
    echo("<br>ピカソの本名: ".$picasso);

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
</body>
<body>
</body>
</html>
