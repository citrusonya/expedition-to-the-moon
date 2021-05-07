<?php
    $air = 'SELECT * FROM air_prod';
    $res_air = $pdo -> prepare($air);
    $res_air -> execute();

    $oxygen = $res_air -> fetchAll(PDO::FETCH_ASSOC);
?>