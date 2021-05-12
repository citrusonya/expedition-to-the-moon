<?php
    require_once('./components/profile.php')
?>

<div data-content-id="profile" class="content active">
    <h2>Ваш профиль</h2>
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
        <tbody>
            <tr>
                <td class="table_col"><?= ucfirst($_SESSION['first_name']); ?></td>
                <td class="table_col"><?= ucfirst($_SESSION['last_name']); ?></td>
                <td><?= $person['sp_name']; ?></td>
                <td><?= $person['rank_name']; ?></td>
                <td><?= $person['country_name']; ?></td>
                <td>
                    <button class="btn_aqua edit" type="button" name="edit" id="<?= $_SESSION['id']; ?>">
                        <ion-icon name="create-outline"></ion-icon>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>