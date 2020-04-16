
<?php
    require_once("EnemyInterface.php");
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
    //task1-3
    class Drakiy implements EnemyInterface{
        private $name;
        public function __construct(string $name)
        {
            $this->name = $name;
        }
        public function getName(): string
        {            
           return $this->name;
        }
        public function getAttackMessage(): string
        {
            $attackMessage = '噛みついてきた！';
            return $attackMessage;
        }
        public function getEncountMessage(): string
        {
            $encountMessage = $this->name.'が警戒しながらこっちを見ている。';
            return $encountMessage;
        }
    }
    ?>
</p>
</body>
</html>
