<?php
    require_once('./components/water_supply.php')
?>

<div data-content-id="water_supply" class="content">
    <div class="text-center"><h2>Водоснабжение</h2></div>
    <button class="btn btn-outline-primary m-3" type="button" id="add_button" data-toggle="modal" data-target="#userModal"><i class="bi bi-plus-circle"></i></button>
    <table class="table">
        <tr>
            <th class="text-center">Установка</th>
            <th class="text-center">Производит, л.</th>
            <th class="text-center">Потребляет электричество, квт.</th>
            <th class="text-center">Потребляет кислород, куб/м.</th>
            <th class="text-center">Активность, ч.</th>
            <th class="text-center">Потребитель</th>
            <th></th>
        </tr>
        <?php foreach ($water_supply as $w): ?>
            <tr>
                <td><?= $w['generator'] ?></td>
                <td class="text-center"><?= $w['amount'] ?></td>
                <td class="text-center"><?= $w['consumes_electr'] ?></td>
                <td class="text-center"><?= $w['consumes_air'] ?></td>
                <td><?= $w[''] ?></td>
                <td><?= $w[''] ?></td>
                <td>
                    <button class="btn btn-outline-success" type="button" name="update" id=""><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-outline-danger" type="button" name="delete" id=""><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>