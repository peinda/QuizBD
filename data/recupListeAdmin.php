<?php
require_once ("connexiondb.php");
global $pdo;

    $limit = $_POST["limit"]; // 
    $offset = $_POST["offset"]; //

    $sql ="
        SELECT (`prenom`), (`nom`), (`login`) FROM utilisateurs 
        WHERE `profil`='admin'
        ORDER BY `utilisateurs`.`score` DESC
        LIMIT {$limit}
        OFFSET {$offset}
    ";  
    $req = $pdo->query($sql);
    $result = $req->fetchAll(2);

    echo json_encode($result);

 
    

?>