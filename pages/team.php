<?php
    require_once('./components/team.php');
?>

<div data-content-id="team" class="content">
        <div class="text-center"><h2>Наша команда</h2></div>
        <button class="btn btn-outline-primary m-3" type="button" id="add_button" data-toggle="modal" data-target="#userModal"><i class="bi bi-plus-circle"></i></button>
    <table class="table">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Должность</th>
                <th>Звание</th>
                <th>Страна</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $u): ?>
                <tr>
                    <td><?=$u['first_name']?></td>
                    <td><?=$u['last_name']?></td>
                    <td><?=$u['sp_name']?></td>
                    <td><?=$u['rank_name']?></td>
                    <td><?=$u['country_name']?></td>
                    <td>
                        <button class="btn btn-outline-success button_update" type="button" name="update" id="<?= $u['id'] ?>"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-danger button_delete" type="button" name="delete" id="<?= $u['id'] ?>"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>