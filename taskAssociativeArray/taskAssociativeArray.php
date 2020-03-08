<?php 
    $AkunArray = [
        '国語' => 85,
        '数学' => 64,
        '社会' => 45,
        '理科' => 77,
        '英語' => 80,

    ];

    $AkunSubject = '理科';

    $BkunArray = [
        '国語' => 56,
        '数学' => 89,
        '社会' => 73,
        '理科' => 85,
        '英語' => 78,
    ];        

    $BkunSubject = '英語';

    $allAkunPoint = array_sum($AkunArray);
    $AkunElement = count($AkunArray);
    $averageAkunPoint = $allAkunPoint / $AkunElement;

    //全員の成績の2次元配列
    $grade = [
        'A点数' => [
            '国語' => 85,
            '数学' => 64,
            '社会' => 45,
            '理科' => 77,
            '英語' => 80,
        ],

        'B点数' => [
            '国語' => 56,
            '数学' => 89,
            '社会' => 73,
            '理科' => 85,
            '英語' => 78,
        ],

        'C点数' => [
            '国語' => 98,
            '数学' => 87,
            '社会' => 88,
            '理科' => 92,
            '英語' => 96,
        ],

    ];

    $CkunArray = $grade['C点数'];
    $allCkunPoint = array_sum($CkunArray);
    $CkunElement = count($CkunArray);
    $averageCkunPoint = $allCkunPoint / $CkunElement;

    $AkunMathPoint = $grade['A点数']['数学'];
    $BkunMathPoint = $grade['B点数']['数学'];
    $CkunMathPoint = $grade['C点数']['数学'];
    $allMathPoint = $AkunMathPoint + $BkunMathPoint + $CkunMathPoint;
    $gradeElement = count($grade);
    $averageMathPoint = $allMathPoint / $gradeElement;


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
</head>
<body>
    <p><?php echo('A君の' . $AkunSubject . 'の点数は' . $AkunArray[$AkunSubject] .'点です。'); ?></p>
    <p><?php echo('B君の' . $BkunSubject . 'の点数は' . $BkunArray[$BkunSubject] .'点です。'); ?></p>
    <p><?php echo('A君の平均点は' . $averageAkunPoint . '点です。'); ?></p>
    <p><?php echo('C君の平均点は' . $averageCkunPoint . '点です。'); ?></p>
    <p><?php echo('数学の平均点は' . $averageMathPoint . '点です。'); ?></p>

</body>
<body>
</body>
</html>
