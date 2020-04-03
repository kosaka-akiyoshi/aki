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
    function display(array $mojiretsu)
    {
        for($i = 0; $i < count($mojiretsu); $i++) {
            echo("<pre>");
            echo($mojiretsu[$i]);
            echo("</pre>");    
        }    
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
    function createRandomNumberArrayAndDisplay()
    {
        $syori_array = createRandomNumberArray();
        $syorigo_array = [];
        for ($count = 0; $count < 10; $count++){
            $kazu = $count + 1;
            $syori = $syori_array[$count];
            $syori2 = $kazu."番目の数値:".$syori;
            $syorigo_array[$count] = $syori2;
        }
        display($syorigo_array);
    }
    createRandomNumberArrayAndDisplay();

    
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

    /*
    for($count5 = 0; $count5 < 20; $count5++)
    {

        $new = key($data);
        $tugi = next($data);
        echo($new);

    }
    */

    //task4
    function numberAverageClac(array $array, int $int): float
    {
        $all = array_sum($array);
        $element = count($array);
        //小数点の位を調整するために$intを定義
        $average = round($all / $element, $int);
        return $average;
    }
    $averageAnswer1 = numberAverageClac($data,0);
    $averageAnswer2 = numberAverageClac($data,1);

    $answer42_array = [
        "平均は（小数点1位は四捨五入）は".$averageAnswer1."です！",
        "平均は（小数点2位は四捨五入）は".$averageAnswer2."です！"
    ];
    display($answer42_array);

    function overAverage(array $array):int
    {
        $average = numberAverageClac($array,0);
        
        //個数を調べるため、最初に0を定義
        $new = 0;
        //new_array = [];
        foreach ($array as $key => $val)
        {
            if($average <= $val)
            {
                $new++;
                //new_array[] = val;
            }
        }
        //$countData = count($new_array);
        //return $countData;
        return $new;
    }

    $countAnswer = overAverage($data,0);
    $count_array = ["平均以上は".$countAnswer."個です！"];
    display($count_array);
?>
</p>
</body>
</html>
