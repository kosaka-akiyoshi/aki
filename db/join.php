
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
        echo(//task1
            select cy.name as cy_name, cy.area as cy_area, he.name as he_name 
            from country as cy inner join heritage as he on cy.id = he.country_id;
            //task2
            select cy.name as cy_name, he.name as he_name from country as cy 
            inner join heritage as he on cy.id = he.country_id where cy.area = 'ヨーロッパ';
            //task3
            select cy.name as cy_name, cy.number as cy_number, he.name as he_name from country as cy 
            inner join heritage as he on cy.id = he.country_id where cy.number >= 40 and he.type = '文化';
            //task4
            select cy.name as cy_name, he.name as he_name from country as cy
            left join  heritage as he on cy.id = he.country_id he.type = '自然';
        ); 
    ?>
</p>
</body>
<body>
</body>
</html>
