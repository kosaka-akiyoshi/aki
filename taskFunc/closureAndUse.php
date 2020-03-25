
<?php
    $lastName = "斎藤";
    $firstName = "新三";

    $concat1 =function(string $firstName, string $lastName): string
    {
        return $lastName." ".$firstName;
    };

    $concatName1 = $concat1($firstName,$lastName);
    echo("無名関数の変数を使っての結合結果; ".$concatName1."<br>");
    $concat2 = function() use ($firstName, $lastName): string
    {
        return $lastName." ".$firstName;
    };

    $concatName2 = $concat2();
    echo("無名関数とuseを使っての結合結果; ".$concatName2."<br>");


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
