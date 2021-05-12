<?php
    require_once('./components/electricity.php')
?>

<div data-content-id="electricity" class="content">
    <h2>Электроэнергия</h2>
    <button type="button" id="add_button" class="btn_table btn_blue open_modal"><ion-icon name="add-circle-outline"></ion-icon></button>
    <table>
        <thead>
            <tr>
                <th>Установка</th>
                <th>Производит, квт.</th>
                <th>Активность, ч.</th>
                <th>Потребитель</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($electricity as $e): ?>
                <tr>
                    <td class="table_col"><?= $e['generator'] ?></td>
                    <td><?= $e['amount'] ?></td>
                    <td><?= $e[''] ?></td>
                    <td><?= $e[''] ?></td>
                    <td>
                        <button type="button" class="btn_aqua" name="update"><ion-icon name="create-outline"></ion-icon></button>
                        <button type="button" class="btn_pink" name="delete"><ion-icon name="trash-outline"></ion-icon></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>