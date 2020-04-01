<?php
    function randomRecursiveClac(int $int1): array
    {
        static $random_array = [];
        static $goukei = 0;
        for($count = 1; $count <= $int1; $count++){
            $hyakuRandom = rand(1, 100);
            $random_array['rand_num'][$count] = $hyakuRandom;
            $goukei += $hyakuRandom;
        };
        $random_array['num'] = $goukei;
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
    $goukei = $random['num'];
    
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
    <?php foreach ($random['rand_num'] as $key => $val){ ?>
    <tr>
    <!--一行目の処理-->
    <td><?php echo("$key") ?> </td>
    <!--二行目の処理-->　
    <td> <?php echo("$val") ?> </td>
    
    </tr>
    <?php } ?>
</table>
</body>
</html>
