
<?php
    require_once("Hero.php");
    require_once("Brave.php");
    require_once("Witch.php");
    require_once("priest.php");
    require_once("Playman.php");
    require_once("Party.php");

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
    $villager = new Hero('村人A','男', '村人', 5, 5, 5, 5);
    $brave = new Brave('ようこ', '女','勇者', 24, 6, 13, 8);
    $witch = new Witch('りな','女', '魔法使い', 16, 11, 5, 4);
    $priest = new priest('たかし', '男', '僧侶', 18, 8, 9, 6);
    $playman = new Playman('みつや', '男', '遊び人', 16, 7, 7, 7);

    //task3-2
    $yusya = new Party($brave);
    $witch_add_str = $yusya->addHero($witch);
    $priest_add_str = $yusya->addHero($priest);
    $playman_add_str = $yusya->addHero($playman);
    $villager_add_str = $yusya->addHero($villager);
    
    echo("<pre>"."$witch_add_str"."</pre>");
    echo("<pre>"."$priest_add_str"."</pre>");
    echo("<pre>"."$playman_add_str"."</pre>");
    echo("<pre>"."$villager_add_str"."</pre>");

    $yusya->allHeroAttack();
   
    
?>
</P>
</body>
</html>
