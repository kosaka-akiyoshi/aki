
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
    class EnemyGroup {
        private $enemyGroup = [];
        public function __construct(array $enemyGroup)
        {
            $this->enemyGroup = $enemyGroup;
        }
        public function encount()
        {            
            echo '<pre>魔物のむれがあらわれた！</pre>';
            foreach($this->enemyGroup as $enemy){
                echo('<pre>'.$enemy->getEncountMessage().'</pre>');
            }   
        }       
        public function attack()
        {
            foreach($this->enemyGroup as $enemy){
                echo ('<pre>'.$enemy->getName().'の攻撃！</pre>');
                echo('<pre>'.$enemy->getAttackMessage().'</pre>');
            }            
        }
    }
    ?>
</p>
</body>
</html>
