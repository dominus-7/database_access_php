<?php
    try {
        $db = new PDO("mysql:host=127.0.0.1;dbname=DWM;port=8889","root","root");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


?>