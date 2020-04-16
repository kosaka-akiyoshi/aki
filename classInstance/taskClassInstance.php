
<?php
    require_once("Hero.php");
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
<p>
    <?php 
    //task2-1
    $youko = new Hero('ようこ', '女','勇者', 24, 6, 13, 8);
    $rina = new Hero('りな','女', '魔法使い', 16, 11, 5, 4);
    $takashi = new Hero('たかし', '男', '僧侶', 18, 8, 9, 6);
    
    //task2-2
    $status[] = $youko->getStatus();
    $status[] = $rina->getStatus();
    $status[] = $takashi->getStatus();
    
    //echo $rina->name;
    //echo $rina->$gender;
    ?>
</p>
<table border = 1 >
    <tr>
        <th>名前</th>
        <th>性別</th>
        <th>職業</th>
        <th>HP</th>
        <th>MP</th>
        <th>攻撃力</th>
        <th>防御力</th>
    </tr>
    <?php
    foreach ($status as $eachStatus){ 
        echo("<tr>");
        foreach($eachStatus as $value){
            echo("<td>".$value."</td>");
        }
        echo("</tr>");
    }
    ?>
</table>
</body>
<body>
</body>
</html>
