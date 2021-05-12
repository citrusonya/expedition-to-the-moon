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
                        <button class="btn btn-outline-success" type="button" name="update" id="'.$row["id"].'"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-danger" type="button" name="delete" id="'.$row["id"].'"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>