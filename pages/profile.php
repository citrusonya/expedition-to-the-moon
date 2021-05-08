<?php
    require_once('./components/profile.php')
?>

<div data-content-id="profile" class="content active">
    <h2>Ваш профиль</h2>
    <table class="table">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Должность</th>
            <th>Звание</th>
            <th>Страна</th>
            <th></th>
        </tr>
        <tr>
            <td><?= ucfirst($_SESSION['first_name']); ?></td>
            <td><?= ucfirst($_SESSION['last_name']); ?></td>
            <td><?= $person['sp_name']; ?></td>
            <td><?= $person['rank_name']; ?></td>
            <td><?= $person['country_name']; ?></td>
            <td>
                <button class="btn btn-outline-success update_person" type="button" name="update" id="<?= $_SESSION['id']; ?>"><i class="bi bi-pencil"></i></button>
            </td>
        </tr>
    </table>
</div>