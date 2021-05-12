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
        </tbody>
    </table>
</div>