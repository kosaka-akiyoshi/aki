
<?php
    //task1
    function calcNumber(int $int1, int $int2, bool $bool1) :int
    {
        if($bool1){   
            $pulas = $int1 + $int2;
            return $pulas;
        }
        else{  
            $mainas = $int1 - $int2;
            return $mainas;
        }
    };
    //task2
    $kaizyou = function (int $int3, bool $bool2): int
    {
        if($bool2){
            $kakeru2 = $int3 * $int3;
            return $kakeru2;
        }
        else{   
            $kakeru3 = $int3 * $int3 * $int3;
            return $kakeru3;
        }
    };
    
    //task3 - 1
    function calcAverage(array $array): int
    {
        $allScore = 0;
        foreach ($array as $key => $value){
            $allScore += $value;
        }
        $scoreElement = count($array);
        $averageScore = round($allScore / $scoreElement, 0);
        return $averageScore;
    };

    //task3 - 2
    function differenceScore(array $array1, array $array2): array
    {  
        $new_array1 = [];
        $new_array2 = [];
        foreach($array1 as $key1 => $value1) {
            $val1 = $array1[$key1];
            $new_array1[] = $val1;
        };   

        foreach($array2 as $key2 => $value2) {
            $val2 = $array2[$key2];
            $new_array2[] = $val2;
        };    

        foreach($new_array1 as $key3 => $value3) {
            $atai1 = $new_array1[$key3];
            $atai2 = $new_array2[$key3];
            $atai = $atai2 - $atai1;
            $hikaku_array[$key3] = $atai;
        };
        return $hikaku_array;  
    };
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
</html>
