
<?php
    require_once("Hero.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>
<p>
    <?php
    //task2-3
    class Priest extends Hero {
        public function attack(): string
        {
            $priest_attackHyouji = '魔法で味方を回復しました！';
            return $priest_attackHyouji;
        }
    }
    ?>
</p>
</body>
</html>
