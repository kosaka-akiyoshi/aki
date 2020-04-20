
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
    //task 1-2
    class Slime implements EnemyInterface{
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
            $attackMessage = 'が体当たりしてきた！';
            return $attackMessage;
        }
        public function getEncountMessage(): string
        {
            $encountMessage = $this->name.'がぷるぷるしている。';
            return $encountMessage;
        }
    }
    ?>
</p>
</body>
</html>
