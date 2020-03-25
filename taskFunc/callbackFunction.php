
<?php
    function concatenateSpace(string $firstName, string $lastName): string
    {
        return $lastName." ".$firstName;
    }

    function useConcatenate(array $name, callable $function)
    {
        $concatName = $function(...$name);
        echo($function."関数での結合結果: ".$concatName."<br>");
    }
    $nameParam = ["新三", "斎藤"];
    useConcatenate($nameParam, "concatenateSpace");
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
