
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
     
    class Party {
        public const PARTY_LIMIT = 4;
        private $party = [];
        public function __construct(Hero $Hero_class)
        {
            $this->party[] = $Hero_class;
        }
        //task2
        public function addHero(Hero $Hero_class): string
        {
            $addFlug = false;
            foreach($this->party as $already_hero)
                if($already_hero->name == $Hero_class->name){
                    $addFlug = true;
                    break;
                }
            if($addFlug){
                $add_str = $Hero_class->name."はすでに仲間にいます。";
                return $add_str;    
            }else{
                $this->party[] = $Hero_class;
                if(count($this->party) <= Party::PARTY_LIMIT){ 
                    $add_str = $Hero_class->name."が仲間になりました！";
                }else{
                    $add_str = 'パーティの上限数に達しています。';
                    array_pop($this->party);
                }
                return $add_str;
            }


        }

        public function allHeroAttack()
        {
            //echo(count($this->party));
            foreach($this->party as $Hero_class){
                echo("<pre>"."$Hero_class->name"."のターンです。</pre>");
                echo("<pre>".$Hero_class->attack()."</pre>");
            }
        }
    }
    ?>
</p>
  
</body>
<body>
</body>
</html>
