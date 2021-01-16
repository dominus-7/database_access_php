<?php
    require 'connexion.php';
    $req = "SELECT * FROM users";
    $stmt = $db->query($req);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
   


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">USERS</h1>
    <form action="add.php" align="center">
        <input type="text" name="nom" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <button>Ajouter</button>
        <p></p>
    </form>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>E-MAIL</th>
            <th colspan='2'> ACTION</th>
        </tr>
        <?php foreach($rows as $row): ?>
            <tr align="center">
                <td><?=$row['id'] ?></td>
                <td><?=$row['nom'] ?></td>
                <td><?=$row['email'] ?></td>
                <td><a href="delete.php?idd=<?=$row['id'] ?>">Supprimer</a></td>
                <td><a href="update.php?idd=<?=$row['id'] ?>">Modifier</a></td>
            </tr>
        <?php  endforeach; ?>
    </table>
</body>
</html>