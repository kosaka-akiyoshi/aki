<?php
    $bgcolor ='#FFFFFF'; //白
    if($_POST['bgcolor'] == 'blue'){
        $bgcolor = '#0000FF'; //青
    }elseif($_POST['bgcolor'] == 'green'){
        $bgcolor = '#00FF00'; //緑
    }
    setcookie('bgcolor',$bgcolor);
    echo('背景色を設定しました');
?>