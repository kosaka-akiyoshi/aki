
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
    //task1 
    class Playman extends Hero {
        public function attack(): string
        {   
            $rand_num = rand(0, 9);
            if($rand_num <= 6){
                $knife_hyouji = '短剣で攻撃しました！';
            }elseif($rand_num >= 7){
                $knife_hyouji = '口笛を吹きスライムを呼び寄せた。。。';
            }
            return $knife_hyouji;
        }
    }
    ?>
</p>
</body>
</html>
