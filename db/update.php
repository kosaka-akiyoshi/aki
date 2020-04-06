<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>
<p>
    <?php 
        echo( //task1-1
            update 
                country 
            set 
                area = '東アジア' 
            where 
                id = 1;
            //task1-2
            update 
                heritage 
            set 
                name = '富士山－信仰の対象と芸術の泉', type = '文化' 
            where 
                id = 6;
        ); 
?>
</p>
</body>
<body>
</body>
</html>