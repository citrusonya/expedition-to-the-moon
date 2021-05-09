<?php
    $specialization = 'SELECT * FROM specialization ORDER BY sp_id';
    $res_spec = $pdo -> prepare($specialization);
    $res_spec -> execute();
    $select_sp = $res_spec -> fetchAll(PDO::FETCH_ASSOC);

    $rank = 'SELECT * FROM rank ORDER BY rank_id';
    $res_rank = $pdo -> prepare($rank);
    $res_rank -> execute();
    $select_rank = $res_rank -> fetchAll(PDO::FETCH_ASSOC);

    $country = 'SELECT * FROM country ORDER BY country_name';
    $res_country = $pdo -> prepare($country);
    $res_country -> execute();
    $select_country = $res_country -> fetchAll(PDO::FETCH_ASSOC);
?>