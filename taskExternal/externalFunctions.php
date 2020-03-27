
<?php
    //task1
    function calcNumber(int $int1, int $int2, bool $bool1) :int
    {
        if($bool1){   
            $pulass = $int1 + $int2;
            return $pulass;
        }
        else{  
            $mainass = $int1 - $int2;
            return $mainass;
        }
    };
    //task2
    $kaizyou = function (int $int3, bool $bool2): int
    {
        if($bool2){
            $answer1 = $int3 * $int3;
            return $answer1;
        }
        else{   
            $answer2 = $int3 * $int3 * $int3;
            return $answer2;
        }
    };
    
    //task3 - 1
    function calcAverage(array $array1): int
    {
        $allTensu = 0;
        foreach ($array1 as $key => $val){
            $allTensu += $val;
        }
        $tensuElement = count($array1);
        $averageData1 = round($allTensu / $tensuElement, 0);
        return $averageData1;
    };

    //task3 - 2
    function differenceScore(array $array1, array $array2): array
    {  
        $new_array1 = [];
        $new_array2 = [];
        foreach($array1 as $key1 => $value1) {
            $yoso1 = $array1[$key1];
            $new_array1[] = $yoso1;
        };   

        foreach($array2 as $key2 => $value2) {
            $yoso2 = $array2[$key2];
            $new_array2[] = $yoso2;
        };    

        $hikaku_array = [];
        for($count = 0; $count < 5; $count++) {
            $atai1 = $new_array1[$count];
            $atai2 = $new_array2[$count];
            $atai = $atai2 - $atai1;
            $hikaku_array[$count] = $atai;
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
<body>
</body>
</html>
