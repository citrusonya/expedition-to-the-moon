<?php
    $man = 'SELECT * FROM users u
                            LEFT JOIN specialization s on s.sp_id = u.sp_id
                            LEFT JOIN rank r on r.rank_id = u.rank_id
                            LEFT JOIN country c on c.country_id = u.country_id
                            WHERE id = :id;';
    $res_person = $pdo -> prepare($man);
    $res_person -> execute(
        array(':id' => $_SESSION['id'])
    );
    $person = $res_person -> fetch(PDO::FETCH_LAZY)
?>
