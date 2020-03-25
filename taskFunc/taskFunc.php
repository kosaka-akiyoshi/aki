<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>
<p>   
<?php
    //task1
    $task1 = ["関数で文字列を表示!","254 × 322 = 81788"];
    function display(array $mojiretsu): string
    {
        for($i = 0; $i < count($mojiretsu); $i++) {
            echo("<pre>");
            echo($mojiretsu[$i]);
            echo("</pre>");    
        }
        return '';
        
    }
    display($task1);

    //task2
    function createRandomNumberArray():array
    {
        $randomArray =[];
        for ($count = 0; $count < 10; $count++){
        $randomArray[$count] =rand(1,100);
        }
    return $randomArray;
    }
    echo("<pre>");
    var_dump(createRandomNumberArray());
    echo("</pre>");

    //task3
    function createRandomNumberArrayAndDisplay(callable $function)
    {
        $syori_array = $function();
        $syorigo_array = [];
        for ($count = 0; $count < 10; $count++){
            $kazu = $count + 1;
            $syori = $syori_array[$count];
            $syori2 = $kazu."番目の数値:".$syori;
            $syorigo_array[$count] = $syori2;
        }
        display($syorigo_array);
        }
    createRandomNumberArrayAndDisplay('createRandomNumberArray');

    
    $data = 
    [
        47,
        31,
        86,
        16,
        39,
        53,
        94,
        3,
        74,
        28,
    ];

    /* 先生に質問した内容 key値の取り出し方
    for($count5 = 0; $count5 < 10; $count5++)
    {
        
        $kagi = key($data);
        var_dump($kagi);
        echo(next($data));
    }
    */


    $syosu = 0;
    //task4
    function numberAverageClac1(array $array1, int $syosu):float
    {
        foreach ($array1 as $key => $val){
        //foreachで要素の値をすべて合算。　入れ物として$syosu = 0;をあらかじめ定義
        $syosu += $val;
        }
        $dataElement = count($array1);
        $averageData1 = round($syosu / $dataElement, 1);

        return $averageData1;
    }
    function numberAverageClac2(array $array2):float
    {
        $allData = array_sum($array2);
        $arrayElement = count($array2);
        $averageData2 = round($allData / $arrayElement, 0);

        return $averageData2;
    }
    $averageAnswer1 = numberAverageClac1($data,$syosu);
    $averageAnswer2 = numberAverageClac2($data);

    $answer42_array =   
    [
        "平均は（小数点1位は四捨五入）は".$averageAnswer1."です！",
        "平均は（小数点2位は四捨五入）は".$averageAnswer2."です！"
    ];
    display($answer42_array);

    
    function overAverage(array $array1, int $syosu):int
    {
        foreach ($array1 as $key => $val)
        {
            $syosu += $val;
        }
        $dataElement = count($array1);
        $averageData1 = round($syosu / $dataElement, 0);
        
        //個数を調べるため、最初に0を定義
        $new = 0;
        //new_array = [];
        foreach ($array1 as $key => $val)
        {
            if($averageData1 <= $val)
            {
                $new++;
                //new_array[] = val;
            }
        }
        //$countData = count($new_array);
        //return $countData;
        return $new;
        ;
    }

    $countAnswer = overAverage($data,$syosu);
    $count_array = ["平均以上は".$countAnswer."個です！"];
    
    display($count_array);
?>
</p>
</body>
</html>
