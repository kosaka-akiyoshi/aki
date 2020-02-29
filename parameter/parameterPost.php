<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskParameter</title>
   <style type="text/css">
   <!--
   .akafutoji{
       color:red;
       font-weight:bold;
   }
   -->
   </style>
</head>
<body>
<p><?php echo('str1は、'); ?>
<span class="akafutoji"><?php echo($_POST['dog']);?></span>
<?php echo('です。'); ?></p>
<p><?php echo('str2は、'); ?>
<span class="akafutoji"><?php echo($_POST['bird']);?></span>
<?php echo('です。'); ?></p>
<p><?php echo('str3は、'); ?>
<span class="akafutoji"><?php echo($_POST['monkey']);?></span>
<?php echo('です。'); ?></p>
</body>
</html>