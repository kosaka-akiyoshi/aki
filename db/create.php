
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>
<p>
<?php 
    echo (create table country (id int auto_increment primary key not null
        , name varchar(20) not null, area varchar(10), lang varchar(10) default '英語' 
        , number int not null default 0)); 
?>
</p>
<p>
<?php 
    echo (create table heritage(id int auto_increment primary key not null
        , name varchar(20) not null, country_id int not null, type varchar(2) not null)); 
?>
</p>
</body>
<body>
</body>
</html>
