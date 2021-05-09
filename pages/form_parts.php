<?php
    require_once('./components/form_parts.php');
?>

<div class="form-group">
    <label class="mr-sm-2" for="specialization">Должность</label>
    <select id="specialization" class="custom-select mr-sm-2">
        <option selected>Выбрать...</option>
        <?php foreach ($select_sp as $sel_sp): ?>
            <option value="<?=$sel_sp['sp_id']?>"><?=$sel_sp['sp_name']?></option>;
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label class="mr-sm-2" for="rank">Звание</label>
    <select id="rank" class="custom-select mr-sm-2">
        <option selected>Выбрать...</option>
        <?php foreach ($select_rank as $sel_r): ?>
            <option value="<?=$sel_r['rank_id']?>"><?=$sel_r['rank_name']?></option>;
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label class="mr-sm-2" for="country">Страна</label>
    <select id="country" class="custom-select mr-sm-2">
        <option selected>Выбрать...</option>
        <?php foreach ($select_country as $sel_c): ?>
            <option value="<?=$sel_c['country_id']?>"><?=$sel_c['country_name']?></option>;
        <?php endforeach; ?>
        <option value="0">Другая...</option>
    </select>
    <input id="input_country" type="text" placeholder="Введите название страны" class="form-control mt-2">
</div>