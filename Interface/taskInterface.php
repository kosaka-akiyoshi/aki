
<?php
    require_once("EnemyGroup.php");
    require_once("slime.php");
    require_once("Drakiy.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskInterface</title>
</head>
<body>
<p>
    <?php
    //task3-1
    $slimeA = new Slime('スライムA');
    $slimeB = new Slime('スライムB');
    $drakiy = new Drakiy('ドラキー');

    //task3-2
    $enemyGroup = new EnemyGroup(array($slimeA, $slimeB, $drakiy));
    $enemyGroup->encount();
    $enemyGroup->attack();
    
    ?>
</p>
</body>
</html>
