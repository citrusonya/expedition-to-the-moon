<?php
    $electr = 'SELECT * FROM electr_prod';
    $res_elect = $pdo -> prepare($electr);
    $res_elect -> execute();

    $electricity = $res_elect -> fetchAll(PDO::FETCH_ASSOC);
?>