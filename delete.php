<?php
    require 'connexion.php';

    $id = $_GET['idd'];

    $req = 'DELETE FROM users WHERE id= ?';
    $stmt= $db->prepare($req);
    $stmt->bindValue(1,$id,PDO::PARAM_INT);
    $stmt->execute();

    header('location:index.php');


?>