<?php
    $sql = 'SELECT * FROM users ORDER BY id';
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div data-content-id="team" class="content">
    <h2>Наша команда</h2>
    <table class="table">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Должность</th>
            <th>Звание</th>
            <th>Страна</th>
        </tr>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?=$u['first_name']?></td>
                <td><?=$u['last_name']?></td>
                <td>Ячейка 3</td>
                <td>Ячейка 4</td>
                <td>Ячейка 3</td>
            </tr>
		<?php endforeach; ?>
    </table>
</div>