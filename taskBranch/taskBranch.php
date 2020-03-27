
<?php
    $string = "100"; $number = 100;
    
    $language = rand( 1,100 ); 
    $math = rand( 1,100 );
    $science = rand( 1,100 );
    $society = rand( 1,100 );
    $english = rand( 1,100 );
    $Grade = ( $language + $math + $science + $society + $english ) / 5;
    $allGrade = 67.3;

    $case = '1';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
<p>
<?php //task 1 - 1
    if($string == $number){
        echo("\$string100は100です。<br>");
    } else {
        echo("\$string100は100ではありません。<br>");
    }
?>

<?php //task 1 - 2
    if($string === $number){
        echo("\$string100は100です。<br>");
    } else {
        echo("\$string100は100ではありません。<br>");
    } 
?>

<?php //task 1 - 3
    if($string > $number){
        echo("\$string100は101以上です。<br>");
    } else {
        echo("\$string100は101以上ではありません。<br>");
    } 
?>

<?php //task 1 - 4
    if($string >= $number){
        echo("\$string100は100以上です。<br>");
    } else {
        echo("\$string100は100以上ではありません。<br>");
    } 
?>
</p>
<p> 
<?php //task 2 - 1
    echo("A君の平均点は" . $Grade . "点です。<br>"); 
?>
<?php //task 2 - 2
    if($Grade >= $allGrade){
        echo("A君の平均点は67.3以上です。<br>");
    } else {
        echo("A君の平均点は67.3未満です。<br>");
    } 
?>
</p>
<p> 
<?php //task 3 - 1
    switch($case){
        case true:
            echo 'bool<br>';
            break;
        case 1:
            echo 'int<br>';
            break; 
        case '1':
            echo 'string<br>';
            break;
        default:
            echo 'other<br>';
    }
        ?>
<?php //task 3 - 2
    switch($case){
        case $case === true: //false 
            echo 'bool<br>';
            break;
        case $case === 1: //false
            echo 'int<br>';
            break; 
        case $case === '1'://true
            echo 'string<br>';
            break;
        default:
            echo 'other<br>';
    } 
?>
</p>
</body>
</html>
