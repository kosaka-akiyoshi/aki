
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
    <?php  //task1
        echo(select name, area from country where area = 'ヨーロッパ';
        select name, area from country where area != 'ヨーロッパ';
        select name, lang from country where lang = '英語';
        select name, area, lang from country where area = 'ヨーロッパ' and lang = '英語';
        select * from country where area = 'ヨーロッパ' or number < 40;
        ); 
    ?>
</p>
<p>
    <?php //task2
        echo(select name from country where name like 'イ%';
            select name from country where name like '%ス';
            select * from heritage where country_id in (1, 3);
            select * from heritage where country_id not in (1, 3);
            select * from heritage where type = '文化' order by country_id asc;
            select * from heritage order by country_id asc, id desc;
        ); 
    ?>
</p>
</body>
<body>
</body>
</html>
