<?php
    $pdo = new PDO(
        'mysql:host=localhost;dbname=kadai;charset=utf8',
        'student',
        'password'
    );

    $stmt = $pdo->query('select * from customer');
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($pdo);
    echo("<br>");
    var_dump($stmt);
    echo("<br>");
    var_dump($records);
    echo("<br>");
    echo($_GET['id']);

    $stmt = $pdo->prepare('select * from customer where id = :id');
    $stmt->bindValue(':id',$_GET['id']);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    echo("<br>");
    var_dump($records);
?>
