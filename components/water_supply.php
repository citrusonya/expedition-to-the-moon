<?php
    $water = 'SELECT * FROM water_prod';
    $res_water = $pdo -> prepare($water);
    $res_water -> execute();

    $water_supply = $res_water -> fetchAll(PDO::FETCH_ASSOC);
?>