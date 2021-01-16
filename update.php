<?php
    require 'connexion.php';
    $id = $_GET['idd'];

    $req = 'SELECT * FROM users WHERE id=?';

    $stmt=$db->prepare($req);
    $stmt->bindValue(1,$id,PDO::PARAM_INT);
    $stmt->execute();
    $row= $stmt->fetch(PDO::FETCH_OBJ); 

    if(!$row){
        header('location:index.html');
    } 

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align='center'>USER</h1>
    <form action="save.php" align="center">
        <input type="hidden" name="id" value="<?= $id?>">
        <input type="text" name="name" placeholder="Name" value='<?=$row->nom ?>'>
        <input type="text" name="email1" placeholder="Email" value='<?=$row->email ?>'>
        <button>Enregistrer</button>
        <p></p>
    </form>
</body>
</html>