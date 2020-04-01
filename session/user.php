<?php
if(isset($_SESSION['user_name'])){
    echo($_SESSION['user_name'].'さんの情報');
}else{
    echo('ログインしてください');
}
?>