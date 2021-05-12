<?php
    require_once('./components/oxygen_generation.php')
?>

<div data-content-id="oxygen_generation" class="content">
    <h2>Кислородогенерация</h2>
    <button type="button" id="add_button" class="btn_table btn_blue open_modal"><ion-icon name="add-circle-outline"></ion-icon></button>
    <table>
        <thead>
            <tr>
                <th class="text-center">Установка</th>
                <th class="text-center">Производит, куб/м.</th>
                <th class="text-center">Потребляет электричество, квт.</th>
                <th class="text-center">Активность, ч.</th>
                <th class="text-center">Потребитель</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($oxygen as $o): ?>
                <tr>
                    <td class="table_col"><?= $o['generator'] ?></td>
                    <td><?= $o['amount'] ?></td>
                    <td><?= $o['consumes_electr'] ?></td>
                    <td><?= $o[''] ?></td>
                    <td><?= $o[''] ?></td>
                    <td>
                        <button type="button" class="btn_aqua" name="update"><ion-icon name="create-outline"></ion-icon></button>
                        <button type="button" class="btn_pink" name="delete"><ion-icon name="trash-outline"></ion-icon></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>