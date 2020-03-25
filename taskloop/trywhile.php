<?php
    $count = 1;
    $number = 2;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>
    <?php  
    while($count <= 10) {
        echo($count . "<br>");
        $count++;
    }
    ?>
    <?php
    $x = 1;
    while($x <= 9) {
        $y = 1;
            while($y <= 9) {
                $answer = $x * $y;
                echo("{$x} * {$y} = {$answer}<br>");
                $y++;
        }
        $x++;
    }
    ?>

<p>
    <?php
    
    while($number <= 100) {
        $i = 2;
        while($i < $number){
            if ($number % $i == 0) {
                echo($number . "は素数ではありません<br>");
                break 2;
            }
            $i++;
        }
        if($i == $number){
        echo($number . "は素数です<br>");
        }
        $number++;
    }
    echo("素数判定が終了しました。");
    ?>
</p>
    <p><?php echo(''); ?></p>
</body>
<body>
</body>
</html>