<?php
    //task1
    $pdo = new PDO(
        'mysql:host=localhost;dbname=kadai;charset=utf8',
        'student',
        'password'
    );

    if(isset($_GET['id'])){
        $stmt = $pdo->prepare('select cy.name as cy_name, cy.area as cy_area, he.name as he_name 
        from country as cy inner join heritage as he on cy.id = he.country_id where he.id = :id');
        $stmt->bindValue(':id',$_GET['id']);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $stmt = $pdo->query('select cy.name as cy_name, cy.area as cy_area, he.name as he_name 
        from country as cy inner join heritage as he on cy.id = he.country_id');
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
</head>
<body>
<p>
<?php   
    /*
    echo('<pre>');
    print_r($records);
    echo('</pre>');
    */
?>
    <table border = 1 >
    <?php 
    echo(
        "<tr><td><b>世界遺産名</b></td>
        <td><b>国</b></td>
        <td><b>地域</b></td></tr>"
    );
    foreach ($records as $eachRecord){ 
        echo("<tr>");
        foreach($eachRecord as $value){
            echo("<td>".$value."</td>");
        }
        echo("</tr>");
    }
    ?>
    </table>
</p>
    
</body>
<body>
</body>
</html>
