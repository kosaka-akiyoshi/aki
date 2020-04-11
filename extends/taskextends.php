
<?php
    require_once("Hero.php");
    require_once("Brave.php");
    require_once("Witch.php");
    require_once("priest.php");
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
    //task3-1
    $Hero = new dorakue('村人A','男', '村人', 5, 5, 5, 5);
    $Brave = new Brave('ようこ', '女','勇者', 24, 6, 13, 8);
    $Witch = new Witch('りな','女', '魔法使い', 16, 11, 5, 4);
    $Priest = new priest('たかし', '男', '僧侶', 18, 8, 9, 6);

    //task3-2
    $Hero_kougeki = $Hero->attack();
    $Brave_kougeki = $Brave->attack();
    $Witch_kougeki = $Witch->attack();
    $Priest_kaihuku = $Priest->attack();

    echo("<pre>$Hero_kougeki</pre>");
    echo("<pre>$Brave_kougeki</pre>");
    echo("<pre>$Witch_kougeki</pre>");    
    echo("<pre>$Priest_kaihuku</pre>");    
    ?>
</P>
</body>
</html>
