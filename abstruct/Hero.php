
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
    //task1-1 それぞれのファイルをフォルダabstructに移動
    //task1-2
    //抽象クラス
    abstract class Hero {
        public $name;
        private $gender;
        private $Profession;
        private $HP;
        private $MP;
        private $attack;
        private $defence;

        //コンストラクタ(クラス内)
        public function __construct(
            string $name, string $gender, string $profession, int $HP, int $MP, int $attack, int $defence)
        {
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
            $status = array($this->hero, $this->gender, $this->profession, $this->HP
                , $this->MP, $this->attack, $this->defence);
            return $status;
        }

        //攻撃力
        public function getAttackPower(): int
        {
            return $this->attack;
        }
        
        //防御力
        public function getDefensivePower(): int
        {
            return $this->defence;
        }

        //task1-3
        //攻撃表示(抽象メソッド)
        abstract public function attack();
    }
    ?>
</p>  
</body>
</html>
