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
            '英語では' . $key . 'と表示され、
            日本語では' . $value['japanese'] . '、
            価格は' . $value['price' ] . '円です<br>'
        );
    }  
    ?>
</p>
<p>
    <?php
        //task2-1
        foreach($grade as $menber => $tensu_array){
            $memberPoint = array_sum($tensu_array);
            echo($menber.'の点数 '.$memberPoint.'　');    
        };

        echo('</br>'); 
        //task2-2
        foreach($grade as $menber => $tensu_array){
            $memberPoint = array_sum($tensu_array);
            $subjectElement = count($tensu_array);
            $mAveragePoint = round($memberPoint / $subjectElement, 1);
            echo($menber.'の平均 '.$mAveragePoint.'　');
        };
        
        echo('</br>');  
        //task2-3
        $kokugo_array = [];
        $sugaku_array = [];
        $rika_array = [];
        $syakai_array = [];
        $eigo_array = [];
        $namae_array = [];

        foreach($grade as $menber => $tensu_array){
            foreach($tensu_array as $kyouka => $tensu) {
                if ($kyouka == "国語"){
                $kokugo_array[] = $tensu;
                }
                elseif($kyouka == "数学"){
                $sugaku_array[] = $tensu;
                }
                elseif($kyouka == "社会"){
                $syakai_array[] = $tensu;
                }
                elseif($kyouka == "理科"){
                $rika_array[] = $tensu;
                }
                elseif($kyouka == "英語"){
                $eigo_array[] = $tensu;
                }
                $namae_array[] = $kyouka;
                }
            }; 
        
        //キーと値を入れ替えた二次元配列を作成
        $array_namae = array_flip($namae_array);
        $replacements = array(
            '国語' => $kokugo_array, '数学' => $sugaku_array, 
            '社会' => $syakai_array, '理科' => $rika_array, '英語' => $eigo_array,
        );
        $subject_array = array_replace($array_namae, $replacements);

        $kyouka_average_array = [];
        foreach($subject_array as $kyouka2 => $array_tensu){
            $kyoukaPoint = array_sum($array_tensu);
            $kyoukaElement = count($array_tensu);
            $averageKyoukaPoint = round($kyoukaPoint / $kyoukaElement, 1);
            echo($kyouka2.'の平均 '.$averageKyoukaPoint.'　');
            
            //task2-4(表作成)
            //教科の平均点の配列を作成
            $kyouka_average_array[] = $averageKyoukaPoint;
        };

        //二次元配列に名前とメンバーの平均を追加
        $grade2 = [];
        foreach($grade as $menber => $tensu_array){
            $allMemberPoint = array_sum($tensu_array);
            $subjectElement = count($tensu_array);
            $averageMemberPoint = $allMemberPoint / $subjectElement;
            array_unshift($tensu_array, $menber);
            array_push($tensu_array, $averageMemberPoint);
            $grade2[] = $tensu_array;
            //教科の平均点をさらに平均すると71.3になったのでメンバーの平均点を平均
            $member_average_array[] = $averageMemberPoint;
        };

        //教科の名前と平均を追加（すべての平均点はメンバーの平均点を平均）
        $ue_array = ['名前','国語','数学','社会','理科','英語','平均'];
        $allAverage = array_sum($member_average_array);
        $averageElement = count($member_average_array);
        $averageAverage = round($allAverage / $averageElement, 1);
        array_push($kyouka_average_array, $averageAverage);
        array_unshift($kyouka_average_array, '平均');
    
        array_unshift($grade2, $ue_array);
        array_push($grade2, $kyouka_average_array); 
    ?>  
</p>
<table border = 1 >
    <!--行の処理内容-->
    <?php foreach ($grade2 as $menber => $tensu_array){ ?>
    <tr>
    <!--列の処理内容-->
    <?php foreach($tensu_array as $kyouka => $tensu){ ?>
    <!--表示-->　
    <td> <?php echo("$tensu") ?> </td>
    <?php } ?>
    </tr>
    <?php } ?>
</table>
</body>
</html>
