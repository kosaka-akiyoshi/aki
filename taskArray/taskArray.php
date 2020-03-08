
<?php
    $averageSalaryArray = [
        2018 => 4410000,
        2017 => 4320000,
        2016 => 4220000,
        2015 => 4200000,
        2014 => 4150000
    ];

    $allArray = array_sum($averageSalaryArray);
    $element = count($averageSalaryArray);
    $Array5 = $allArray / $element;

    $score = [
        'A' => 80,
        'B' => 55,
        'C' => 61,
        'D' => 76,
        'E' => 34,
        'F' => 93,
    ];
    $allScore = array_sum($score);
    $element2 = count($score);
    $alphabetScore = $allScore / $element2;
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
            echo("<pre>");
            var_dump($averageSalaryArray);
            echo("</pre><br>");
            
        ?>
    </p>
    <p> 
        <?php echo("過去五年間の平均年収は" . $Array5 . "です"); ?>
    </p>
    <p>
        <?php 
            echo("<pre>");
            var_dump($score);   
            echo("</pre><br>");
        ?>
    </p>
    <p> <?php echo("平均点は" . $alphabetScore . "です"); ?> </p>
    
</body>
<body>
</body>
</html>
