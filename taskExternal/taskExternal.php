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
    //task1
    $hatiyon = 84;
    $sannana = 37;
    $ans = calcNumber($hatiyon, $sannana, true);
    $ans2 = calcNumber($hatiyon, $sannana, false);
    
    echo($hatiyon."＋".$sannana."＝".$ans."</br>");
    echo($hatiyon."－".$sannana."＝".$ans2."</br>");

    //task2
    $ni = $kaizyou($hatiyon, true);
    $san = $kaizyou($sannana, false); 

    echo($hatiyon."の2乗は".$ni."</br>");
    echo($sannana."の3乗は".$san."</br>"); 

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
    $zenkamoku = calcAverage($averageScore);
    $aHeikin = calcAverage($aScore);

    echo("全科目の平均点は".$zenkamoku."です。</br>");
    echo("Aくんの平均点は".$aHeikin."です。</br>"); 

    //task3 - 2
    $hikaku_array = differenceScore($averageScore, $aScore);

    $kyouka_array = [];
    foreach($subjectTitle as $key => $value) {
        $yoso = $subjectTitle[$key];
        $kyouka_array[] = $yoso;
    }; 
            
    for($count = 0; $count < 5; $count++) {
        $atai = $hikaku_array[$count];
        $zettai =abs($atai);
        $kyouka = $kyouka_array[$count];

        if($atai < 0){
            $nakahikaku = $kyouka."は平均点より".$zettai."点高いです。";
        }
        elseif($atai == 0){
            $nakahikaku = $kyouka."は平均点と同じです。";
        }
        elseif($atai > 0){
            $nakahikaku = $kyouka."は平均点より".$zettai."点低いです。";
        }
        $after_array[$kyouka] = $nakahikaku;
    };

    $hikaku =[];
    foreach($after_array as $key2 => $val2){
        $hikaku[] = $after_array[$key2];
    };

    $moji_hikaku = implode("</br>", $hikaku);
    echo("$moji_hikaku");
?>
</body>
<body>
</body>
</html>
