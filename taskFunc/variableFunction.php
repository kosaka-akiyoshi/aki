
<?php
    function contenateSpace(string $firstName, string $lastName): string
    {
        return $lastName." ".$firstName;
    }

    function contenateDot(string $firstName, string $lastName): string
    {
        return $lastName."・".$firstName;
    }
    $lastName = "太郎";
    $firstName ="山田";
    $functionNameList = ["contenateSpace", "contenateDot"];
    foreach($functionNameList as $functionName){
        $name = $functionName($firstName, $lastName);
        echo($functionName."関数での結合結果: ".$name."<br>");
    }


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
