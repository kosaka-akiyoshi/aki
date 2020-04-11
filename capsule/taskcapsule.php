
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
    $youko = new dorakue('ようこ', '女','勇者', 24, 6, 13, 8);
    $rina = new dorakue('りな','女', '魔法使い', 16, 11, 5, 4);
    $takashi = new dorakue('たかし', '男', '僧侶', 18, 8, 9, 6);

    $youko_kougeki = $youko->getAttackPower();
    $rina_bougyo = $rina->getDefensivePower();
    $takashi_kougeki = $takashi->getAttackPower();
    $takashi_bougyo = $takashi->getDefensivePower();

    echo("<pre>$youko->name"."の攻撃力は$youko_kougeki"."です。</pre>");
    echo("<pre>$rina->name"."の防御力は$rina_bougyo"."です。</pre>");
    echo("<pre>$takashi->name"."の攻撃力は$takashi_kougeki"."です。</pre>");    
    echo("<pre>$takashi->name"."の防御力は$takashi_bougyo"."です。</pre>");    
    ?>
  
</body>
<body>
</body>
</html>
