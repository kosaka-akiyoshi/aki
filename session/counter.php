<?php
    session_start();
    if(isset($_SESSION['access'])){
        $_SESSION['access']++;
    }else{
        $_SESSION['access'] = 1;
    }
    echo $_SESSION['access'].'回目のアクセスです。';
?>