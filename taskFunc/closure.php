
<?php
    function useConcatenate(array $name, callable $func)
    {
        $concatName = $func(...$name);
        echo("無名変数での結合結果: ".$concatName."<br>");
    }

    $nameParam = ["太郎","山田"];
    useConcatenate($nameParam, function(string $firstName,string $lastName): string
    {
        return $lastName." ".$firstName;
    }
);

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
