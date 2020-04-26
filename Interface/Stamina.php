
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
    //インターフェース
    interface Stamina{
        public function charge();
        public function lose();
    }

    //実装クラス
    class Human implements Stamina{
        public function charge(){
            echo 'ご飯を食べます。';
        }
        public function lose(){
            echo '運動します。';
        }
    }

    //実装クラス
    class Smartphone implements Stamina {
        public function charge(){
            echo '充電します。';
        }
        public function lose(){
            echo '電話します。';
        }
    }   
    ?>
</p>
</body>
<body>
</body>
</html>
