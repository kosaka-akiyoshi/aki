<?php
    function randomRecursiveClac(int $int1): array
    {
        //ランダム値を格納
        static $random_array = [];
        static $goukei = 0;
        for($count = 1; $count <= $int1; $count++){
            $hyakuRandom = rand(1, 100);
            $random_array['rand_num'][$count] = $hyakuRandom;
        };

        //合計値を計算、格納
        for($count = 1; $count <= $int1; $count++){
            $goukei += $hyakuRandom;
        }
        $random_array['sum'] = $goukei;

        return $random_array;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskScope</title>
</head>
<body>
<p>
<?php 
    $randomInsu = rand(1, 15);
    $random = randomRecursiveClac($randomInsu);
    $goukei = $random['sum'];
    
    echo("処理回数:".$randomInsu."</br>合計:".$goukei."</br>");  
?>
<style type>
table td {
	background: #eee;
}
table tr:nth-child(odd) td {
	background: #fff;
}
</style>
<table border = 1 >
	<!--行の処理内容-->
    <?php 
        foreach ($random['rand_num'] as $key => $val){ 
    //一行目の処理
        echo("<tr><td>$key</td>");
    //二行目の処理
        echo("<td>$val</td></tr>");
    ?> 
    <?php } ?>
</table>
</body>
</html>
