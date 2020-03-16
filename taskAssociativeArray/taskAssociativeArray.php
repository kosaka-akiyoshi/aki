
<?php 
    $akunArray = [
        '国語' => 85,
        '数学' => 64,
        '社会' => 45,
        '理科' => 77,
        '英語' => 80,

    ];

    $akunSubject = '理科';

    $bkunArray = [
        '国語' => 56,
        '数学' => 89,
        '社会' => 73,
        '理科' => 85,
        '英語' => 78,
    ];        

    $bkunSubject = '英語';

    $allAkunPoint = array_sum($akunArray);
    $akunElement = count($akunArray);
    $averageAkunPoint = $allAkunPoint / $akunElement;

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

    $ckunArray = $grade['C点数'];
    $allCkunPoint = array_sum($ckunArray);
    $ckunElement = count($ckunArray);
    $averageCkunPoint = $allCkunPoint / $ckunElement;

    $akunMathPoint = $grade['A点数']['数学'];
    $bkunMathPoint = $grade['B点数']['数学'];
    $ckunMathPoint = $grade['C点数']['数学'];
    $allMathPoint = $akunMathPoint + $bkunMathPoint + $ckunMathPoint;
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
    <p><?php echo('A君の' . $akunSubject . 'の点数は' . $akunArray[$akunSubject] .'点です。'); ?></p>
    <p><?php echo('B君の' . $bkunSubject . 'の点数は' . $bkunArray[$bkunSubject] .'点です。'); ?></p>
    <p><?php echo('A君の平均点は' . $averageAkunPoint . '点です。'); ?></p>
    <p><?php echo('C君の平均点は' . $averageCkunPoint . '点です。'); ?></p>
    <p><?php echo('数学の平均点は' . $averageMathPoint . '点です。'); ?></p>

</body>
<body>
</body>
</html>
