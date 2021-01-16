<?php
    require 'connexion.php';
    $name = $_GET['nom'];
    $email = $_GET['email'];

    $req = 'INSERT INTO users VALUES(null,?,?)';
    $stmt = $db->prepare($req);
    $stmt->bindValue(1,$name,PDO::PARAM_STR);
    $stmt->bindValue(2,$email,PDO::PARAM_STR);
    $stmt->execute();

    header('location:index.php');


?>