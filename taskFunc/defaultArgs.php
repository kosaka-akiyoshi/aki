<?php
    function concatenate(string $firstName, string $lastName, string $space): string 
    {
        return $lastName.$space.$firstName;
    }
    
    $lastName = "太郎";
    $firstName ="山田";
    $name1 = concatenate($firstName, $lastName, " ");
    echo("半角スペースで結合: ".$name1);
    $name2 = concatenate($firstName,$lastName, "");
    echo("<br>スペースなしで結合: ".$name2);

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
