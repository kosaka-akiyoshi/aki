<?php
    $fruitstranslate = [
        'apple' => [
            'japanese' =>   'りんご',
            'price' => 80,
        ],
        'orange' => [
            'japanese' => 'オレンジ',
            'price' => 120,
        ],
        'grape' => [
            'japanese' => 'ぶどう',
            'price' => 220,
        ],
    ];

    
    $grade =
        [
        'A' => [
            '国語' => 34,
            '数学' => 67,
            '社会' => 45,
            '理科' => 34,
            '英語' => 89,
            
        ],

        'B' => [
            '国語' => 76,
            '数学' => 72,
            '社会' => 65,
            '理科' => 77,
            '英語' => 80,
            
        ],

        'C' => [
            '国語' => 98,
            '数学' => 87,
            '社会' => 88,
            '理科' => 92,
            '英語' => 96,
            
        ],

        'D' => [
            '国語' => 65,
            '数学' => 34,
            '社会' => 71,
            '理科' => 56,
            '英語' => 76,
            
        ],

        'E' => [
            '国語' => 67,
            '数学' => 55,
            '社会' => 87,
            '理科' => 56,
            '英語' => 69,
            
        ],
        
        'F' => [
            '国語' => 81,
            '数学' => 79,
            '社会' => 74,
            '理科' => 82,
            '英語' => 85,
            
        ],
    ];   
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
<p>
<?php 
        //task1
        foreach($fruitstranslate as $key => $value){
            echo(
            '英語では' . $key 
            . 'と表示され、日本語では' . $value['japanese'] 
            . '、価格は' . $value['price' ] . '円です</br>'
            );
        }  
?>
</p>
<p> 
    <table border = 1 >
    <?php  
    //1行目
    foreach ($grade as $tensu_array){
        $kyouka_namae_array = array_keys($tensu_array);
    }
    echo("<tr><td>名前</td>");
    foreach($kyouka_namae_array as $kyouka){
        echo("<td>".$kyouka."</td>");
    }
    echo("<td>平均</td></tr>");
    $totalPasonalPoint = 0;
    $menberCount = count($grade);
    //2から7行目
    foreach($grade as $menber => $tensu_array){
        $kokugo_array = array_column($grade, '国語');
        $sugaku_array = array_column($grade, '数学');
        $rika_array = array_column($grade, '理科');
        $syakai_array = array_column($grade, '社会');
        $eigo_array = array_column($grade, '英語');
        echo("<tr><td>".$menber."</td>");

        foreach($tensu_array as $tensu){
            echo("<td>".$tensu."</td>");
        }
        $memberPoint = array_sum($tensu_array);
        $subjectElement = count($tensu_array);
        $menberAveragePoint = round($memberPoint / $subjectElement, 1);
        $totalPasonalPoint += $menberAveragePoint;
        echo('<td>'.$menberAveragePoint.'</td></tr>');
    }
    //8行目
    echo("<tr><td>平均</td>");
    $kyouka_array = [];
    $kyouka_array[] = $kokugo_array;
    $kyouka_array[] = $sugaku_array;
    $kyouka_array[] = $syakai_array;
    $kyouka_array[] = $rika_array;
    $kyouka_array[] = $eigo_array;

    foreach($kyouka_array as $kyouka_tensu_array){
        $kyoukaPoint = array_sum($kyouka_tensu_array);
        $kyoukaAveragePoint = round($kyoukaPoint / $menberCount, 1);
        echo("<td>".$kyoukaAveragePoint."</td>");
    }
    $averageAverage = round($totalPasonalPoint / $menberCount, 1);
    echo("<td>".$averageAverage."</td></tr>");
    ?>
</table>
</p>
</body>
</html>
