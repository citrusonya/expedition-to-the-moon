<?php
    require_once('./crud/person_change.php');
?>

<div data-content-id="team" class="content">
        <h2>Экипаж</h2>
        <button type="button" id="add_button" class="btn_table btn_blue open_modal"><ion-icon name="person-add-outline"></ion-icon></button>
    <table>
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
        <tbody id="hey">
            <?php foreach ($users as $u): ?>
                <tr>
                    <td class="table_col"><?=$u['first_name']?></td>
                    <td class="table_col"><?=$u['last_name']?></td>
                    <td><?=$u['sp_name']?></td>
                    <td><?=$u['rank_name']?></td>
                    <td><?=$u['country_name']?></td>
                    <td>
                        <button class="btn_aqua edit" type="button" name="edit" 
                            data-f-name="<?=$u['first_name']?>" data-l-name="<?=$u['last_name']?>" id="<?= $u['id'] ?>">
                            <ion-icon name="create-outline"></ion-icon>
                        </button>
                        <form method="POST">
                            <button class="btn_pink delete" type="button" name="delete" 
                                data-f-name="<?=$u['first_name']?>" data-l-name="<?=$u['last_name']?>" id="<?= $u['id'] ?>">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>