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
        echo('</br>'); 
        //task2-1  //task2-2 //task2-3
        $youso = 0;
        foreach($grade as $menber => $tensu_array){
            $kokugo_array = array_column($grade, '国語');
            $sugaku_array = array_column($grade, '数学');
            $rika_array = array_column($grade, '理科');
            $syakai_array = array_column($grade, '社会');
            $eigo_array = array_column($grade, '英語');
            $youso++;
        }
        $kokugoPoint = array_sum($kokugo_array); 
        $kokugoAveragePoint = round($kokugoPoint / $youso, 1);

        $sugakuPoint = array_sum($sugaku_array); 
        $sugakuAveragePoint = round($sugakuPoint / $youso, 1);

        $rikaPoint = array_sum($rika_array); 
        $rikaAveragePoint = round($rikaPoint / $youso, 1);

        $syakaiPoint = array_sum($syakai_array); 
        $syakaiAveragePoint = round($syakaiPoint / $youso, 1);

        $eigoPoint = array_sum($eigo_array); 
        $eigoAveragePoint = round($eigoPoint / $youso, 1);
        
        
?>
</p>
<p>
    <?php
    
    ?> 
</p>
<table border = 1 >
    <!--行の処理内容-->
<?php  
    $kyoukaFlug = FALSE;
    
    $totalPasonalPoint = 0;
    $menberCount = count($grade);
    foreach($grade as $menber => $tensu_array){ 
        //foreach($tensu_array as $kyouka => $tensu){
            if(!$kyoukaFlug){
                echo("<tr><td>名前</td>");
                $kyouka_namae = array_keys($tensu_array);
                foreach($kyouka_namae as $value){
                    echo("<td>".$value."</td>");
                }
                echo('<td>平均</td></tr>');
                $kyoukaFlug = TRUE;
            }
            echo("<tr><td>".$menber."</td>");
            $tensu = array_values($tensu_array);
            foreach($tensu as $value){
                echo("<td>".$value."</td>");
            }
            $memberPoint = array_sum($tensu_array);
            $subjectElement = count($tensu_array);
            $mAveragePoint = round($memberPoint / $subjectElement, 1);
            $totalPasonalPoint += $mAveragePoint;
            echo('<td>'.$mAveragePoint.'</td></tr>');
        //}
         
    ?>
    </tr>
    <?php } 
        $menber_average = round($totalPasonalPoint / $menberCount, 1);
    ?>

    <tr><td> <?php echo("平均") ?> </td>
    <td> <?php echo("".$kokugoAveragePoint."") ?> </td>
    <td> <?php echo("".$sugakuAveragePoint."") ?> </td>
    <td> <?php echo("".$syakaiAveragePoint."") ?> </td>
    <td> <?php echo("".$rikaAveragePoint."") ?> </td>
    <td> <?php echo("".$eigoAveragePoint."") ?> </td> 
    <td> <?php echo("".$menber_average."") ?> </td></tr>
</table>
</body>
</html>
