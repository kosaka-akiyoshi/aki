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
  
    <!-- ヘッダ部分 -->
    <tr>
        <th>名前</th>
        <th>国語</th>
        <th>数学</th>
        <th>社会</th>
        <th>理科</th>
        <th>英語</th>
        <th>平均</th>
    </tr>
    <?php
        $allKokugoPoint = 0;
        $allSugakuPoint = 0;
        $allSyakaiPoint = 0;
        $allRikaPoint = 0;
        $allEigoPoint = 0;
        $totalPasonalPoint = 0;
        $menberCount = count($grade);

        //1から6行目
        foreach($grade as $menber => $tensu_array){
            echo("<tr><td>".$menber."</td>");
            foreach($tensu_array as $tensu){
                echo("<td>".$tensu."</td>");
            }
            $memberAllPoint = array_sum($tensu_array);
            $kyoukaCount = count($tensu_array);
            $menberAveragePoint = round($memberAllPoint / $kyoukaCount, 1);
            echo('<td>'.$menberAveragePoint.'</td></tr>');
            
            $allKokugoPoint += $tensu_array['国語'];
            $allSugakuPoint += $tensu_array['数学'];
            $allSyakaiPoint += $tensu_array['社会'];
            $allRikaPoint += $tensu_array['理科'];
            $allEigoPoint += $tensu_array['英語'];
            $totalPasonalPoint += $menberAveragePoint;
        }
    ?>
    <!-- 7行目 -->
    <tr>
        <td>平均</td>
    <?php
        $averageKokugoPoint = round($allKokugoPoint / $menberCount,1);
        $averageSugakuPoint = round($allSugakuPoint / $menberCount,1);
        $averageSyakaiPoint = round($allSyakaiPoint / $menberCount,1);
        $averageRikaPoint = round($allRikaPoint / $menberCount,1);
        $averageEigoPoint = round($allEigoPoint / $menberCount,1);
        $averageAverage = round($totalPasonalPoint / $menberCount, 1);

        echo("<td>".$averageKokugoPoint."</td>");
        echo("<td>".$averageSugakuPoint."</td>");
        echo("<td>".$averageSyakaiPoint."</td>");
        echo("<td>".$averageRikaPoint."</td>");
        echo("<td>".$averageEigoPoint."</td>");
        echo("<td>".$averageAverage."</td></tr>");
    ?>
</table>
</p>
</body>
</html>
