
<?php
 
    function display(string $string)
    {
        echo ('<p>' . $string . '</p>');
    }

// ここに回答を追記する
    session_start();
    if($_GET['clear'] == 0){
        $_SESSION['access']++;
    }else{
        $_SESSION['access'] = 1;
    };
    
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionCounter</title>
    </head>
    <body>
        <?php display($_SESSION['access'].'回目のアクセスです。'); ?>
        <button onclick="location.href='taskSessionCounter.php?clear=0'">
            更新
        </button>
        <button onclick="location.href='taskSessionCounter.php?clear=1'">
            クリア
        </button>
    </body>
</html>
