<?php
    require_once("externalFunctions.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>
<?php

    $hatiyon = 84;
    $sannana = 37;
    //task1
    $pulas = calcNumber($hatiyon, $sannana, true);
    $mainas = calcNumber($hatiyon, $sannana, false);
    
    echo($hatiyon."₊".$sannana."=".$pulas."</br>");
    echo($hatiyon."-".$sannana."=".$mainas."</br>");

    //task2
    $kakeru2 = $kaizyou($hatiyon, true);
    $kakeru3 = $kaizyou($sannana, false); 

    echo($hatiyon." の2乗は ".$kakeru2."</br>");
    echo($sannana." の3乗は ".$kakeru3."</br>"); 

    //task3
    //平均点
    $averageScore = [
        'nationalLanguae' => 63,
        'math' => 67,
        'society' => 71,
        'science' => 68,
        'english' => 66,
    ];

    //Aくんの点数
    $aScore = [
        'nationalLanguae' => 76,
        'math' => 72,
        'society' => 65,
        'science' => 68,
        'english' => 80,
    ];
    

    //科目名
    $subjectTitle = [
        'nationalLanguae' => '国語',
        'math' => '数学',
        'society' => '社会',
        'science' => '理科',
        'english' => '英語',
    ];

    //task3 - 1
    $averageAverageScore = calcAverage($averageScore);
    $aAverageScore = calcAverage($aScore);

    echo("全科目の平均点は".$averageAverageScore."点です。</br>");
    echo("Aくんの平均点は".$aAverageScore."点です。</br>"); 

    //task3 - 2
    $hikaku_array = differenceScore($averageScore, $aScore);

    $kyouka_array = [];
    foreach($subjectTitle as $key => $value) {
        $kyouka = $subjectTitle[$key];
        $kyouka_array[] = $kyouka;
    }; 
            
    foreach($hikaku_array as $key1 => $value1) {
        $atai = $hikaku_array[$key1];
        $zettai =abs($atai);
        $kyouka = $kyouka_array[$key1];

        if($atai < 0){
            $nakahikaku = $kyouka."は、平均点より".$zettai."点高いです。";
        }
        elseif($atai == 0){
            $nakahikaku = $kyouka."は、平均点と同じです。";
        }
        elseif($atai > 0){
            $nakahikaku = $kyouka."は、平均点より".$zettai."点低いです。";
        }
        $after_array[$kyouka] = $nakahikaku;
    };

    $after_hikaku = [];
    foreach($after_array as $key2 => $value2){
        $after_hikaku[] = $after_array[$key2];
    };

    $moji_hikaku = implode("</br>", $after_hikaku);
    echo("$moji_hikaku");
?>
</body>
<body>
</body>
</html>
