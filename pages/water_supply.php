<?php
    require_once('./components/water_supply.php')
?>

<div data-content-id="water_supply" class="content">
    <div><h2>Водоснабжение</h2></div>
    <button type="button" id="add_button" class="btn_table btn_blue open_modal"><ion-icon name="add-circle-outline"></ion-icon></button>
    <table>
        <thead>
            <tr>
                <th>Установка</th>
                <th>Производит, л.</th>
                <th>Потребляет электричество, квт.</th>
                <th>Потребляет кислород, куб/м.</th>
                <th>Активность, ч.</th>
                <th>Потребитель</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($water_supply as $w): ?>
                <tr>
                    <td class="table_col"><?= $w['generator'] ?></td>
                    <td><?= $w['amount'] ?></td>
                    <td><?= $w['consumes_electr'] ?></td>
                    <td><?= $w['consumes_air'] ?></td>
                    <td><?= $w[''] ?></td>
                    <td><?= $w[''] ?></td>
                    <td>
                        <button type="button" class="btn_aqua" name="update"><ion-icon name="create-outline"></ion-icon></button>
                        <button type="button" class="btn_pink" name="delete"><ion-icon name="trash-outline"></ion-icon></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>