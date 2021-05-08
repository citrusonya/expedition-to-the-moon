<?php
    require_once('./components/electricity.php')
?>

<div data-content-id="electricity" class="content">
    <div class="text-center"><h2>Электроэнергия</h2></div>
    <button class="btn btn-outline-primary m-3" type="button" id="add_button" data-toggle="modal" data-target="#userModal"><i class="bi bi-plus-circle"></i></button>
    <table class="table">
        <tr>
            <th class="text-center">Установка</th>
            <th class="text-center">Производит, квт.</th>
            <th class="text-center">Активность, ч.</th>
            <th class="text-center">Потребитель</th>
            <th></th>
        </tr>
        <?php foreach ($electricity as $e): ?>
            <tr>
                <td><?= $e['generator'] ?></td>
                <td class="text-center"><?= $e['amount'] ?></td>
                <td><?= $e[''] ?></td>
                <td><?= $e[''] ?></td>
                <td>
                    <button class="btn btn-outline-success" type="button" name="update" id="'.$row["id"].'"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-outline-danger" type="button" name="delete" id="'.$row["id"].'"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>