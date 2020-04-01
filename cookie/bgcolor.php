<?php
    $bgcolor ='green';
    if(isset($_COOKIE['bgcolor'])){
        $bgcolor = $_COOKIE['bgcolor'];
    }
?>
<html>
    <body> bgcolor = "<?php echo $bgcolor; ?>">
    </body>
</html>