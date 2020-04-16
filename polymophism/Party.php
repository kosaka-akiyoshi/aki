
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
    //task2-1 
    class Party {
        
        //task2-2
        public const PARTY_LIMIT = 4;
        
        //task2-3
        private $party = [];

        //task2-4
        public function __construct(Hero $Hero_class)
        {
            $this->party[] = $Hero_class;
        }

        //task2-5
        public function addHero(Hero $Hero_class): string
        {
            //echo(count($this->party));
            if(count($this->party) == Party::PARTY_LIMIT){
                $add_str = 'パーティの上限数に達しています。';
            }else{
                $this->party[] = $Hero_class;
                $add_str = $Hero_class->name."が仲間になりました！";
            }
            return $add_str;
        }

        //task2-6 
        public function allHeroAttack()
        {
            //echo(count($this->party));
            foreach($this->party as $Hero_class){
                echo("<pre>".$Hero_class->name."のターンです。</pre>");
                echo("<pre>".$Hero_class->attack()."</pre>");
            }
        }
    }
    ?>
</p>
</body>
</html>
