<?php

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
    //クラス
    class dorakue {
        public $name;
        private $gender;
        private $Profession;
        private $HP;
        private $MP;
        private $attack;
        private $defence;

        //コンストラクタ(クラス内)
        public function __construct(
            string $name, string $gender, string $profession
            , int $HP, int $MP, int $attack, int $defence
        ){
            $this->name = $name;
            $this->gender = $gender;
            $this->profession = $profession;
            $this->HP = $HP;
            $this->MP = $MP;
            $this->attack = $attack;
            $this->defence = $defence;
        }

        //関数(クラス内)
        public function getStatus(): array
        {
            $status = array($this->name, $this->gender, $this->profession, $this->HP
                , $this->MP, $this->attack, $this->defence);
            return $status;
        }

        //task1
        //攻撃力
        public function getAttackPower(): int
        {
            $kougeki = $this->attack;
            return $kougeki;
        }
        
        //防御力
        public function getDefensivePower(): int
        {
            $bougyo = $this->defence;
            return $bougyo;
        }
        


    }
    
    
    
    ?>
</p>
    
</body>
<body>
</body>
</html>