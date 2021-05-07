<?php
    $protein = 'SELECT * FROM protein_prod';
    $res_protein = $pdo -> prepare($protein);
    $res_protein -> execute();

    $proteins = $res_protein -> fetchAll(PDO::FETCH_ASSOC);
?>