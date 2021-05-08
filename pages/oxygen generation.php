<?php
    require_once('./components/oxygen generation.php')
?>

<div data-content-id="oxygen_generation" class="content">
    <div class="text-center"><h2>Электроэнергия</h2></div>
    <button class="btn btn-outline-primary m-3" type="button" id="add_button" data-toggle="modal" data-target="#userModal"><i class="bi bi-plus-circle"></i></button>
    <table class="table">
        <tr>
            <th class="text-center">Установка</th>
            <th class="text-center">Производит, куб/м.</th>
            <th class="text-center">Потребляет электричество, квт.</th>
            <th class="text-center">Активность, ч.</th>
            <th class="text-center">Потребитель</th>
            <th></th>
        </tr>
        <?php foreach ($oxygen as $o): ?>
            <tr>
                <td><?= $o['generator'] ?></td>
                <td class="text-center"><?= $o['amount'] ?></td>
                <td class="text-center"><?= $o['consumes_electr'] ?></td>
                <td><?= $o[''] ?></td>
                <td><?= $o[''] ?></td>
                <td>
                    <button class="btn btn-outline-success" type="button" name="update" id=""><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-outline-danger" type="button" name="delete" id=""><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>