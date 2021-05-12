<?php
    require_once('./components/protein_generation.php')
?>

<div data-content-id="protein_generation" class="content">
    <h2>Протеиногенерация</h2>
    <button type="button" id="add_button" class="btn_table btn_blue open_modal"><ion-icon name="add-circle-outline"></ion-icon></button>
    <table>
        <thead>
            <tr>
                <th>Установка</th>
                <th>Производит, гр.</th>
                <th>Потребляет электричество, квт.</th>
                <th>Потребляет воду, л.</th>
                <th>Активность, ч.</th>
                <th>Потребитель</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proteins as $p): ?>
                <tr>
                    <td class="table_col"><?= $p['generator'] ?></td>
                    <td><?= $p['amount'] ?></td>
                    <td><?= $p['consumes_electr'] ?></td>
                    <td><?= $p['consumes_water'] ?></td>
                    <td><?= $p[''] ?></td>
                    <td><?= $p[''] ?></td>
                    <td>
                        <button type="button" class="btn_aqua" name="update"><ion-icon name="create-outline"></ion-icon></button>
                        <button type="button" class="btn_pink" name="delete"><ion-icon name="trash-outline"></ion-icon></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>