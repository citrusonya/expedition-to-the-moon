<?php
    $sql = 'SELECT * FROM users u
                            LEFT JOIN specialization s on s.sp_id = u.sp_id
                            LEFT JOIN rank r on r.rank_id = u.rank_id
                            LEFT JOIN country c on c.country_id = u.country_id
                            ORDER BY id';
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>