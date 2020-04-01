<?php
    session_start();
    $_SESSION['user_name'] = $_POST['user_name'];
    echo('ログインしました');
?>
