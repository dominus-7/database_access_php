<?php
    require 'connexion.php';
    $name = $_GET['name'];
    $email = $_GET['email1'];
    $id = $_GET['id'];

    $req = 'UPDATE users SET nom=?,  email=? WHERE id=?';
    $stmt = $db->prepare($req);
    $stmt->bindValue(1,$name,PDO::PARAM_STR);
    $stmt->bindValue(2,$email,PDO::PARAM_STR);
    $stmt->bindValue(3,$id,PDO::PARAM_INT);
    $stmt->execute();

    header('location:index.php');


?>