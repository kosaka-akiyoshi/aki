
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
    //task1-1
    interface EnemyInterface{
        public function getName():string;
        public function getAttackMessage():string;
        public function getEncountMessage():string;
    }
    ?>
</p>
</body>
</html>
