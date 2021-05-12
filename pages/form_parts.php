<?php
    require_once('./components/form_parts.php');
?>

<label for="sp_id">Должность</label>
<select id="sp_id" name="sp_id">
    <option selected>Выбрать...</option>
    <?php foreach ($select_sp as $sel_sp): ?>
        <option value="<?=$sel_sp['sp_id']?>"><?=$sel_sp['sp_name']?></option>;
    <?php endforeach; ?>
</select>

<label for="rank_id">Звание</label>
<select id="rank_id" name="rank_id">
    <option selected>Выбрать...</option>
    <?php foreach ($select_rank as $sel_r): ?>
        <option data-value-id="<?=$sel_r['rank_id']?>" value="<?=$sel_r['rank_id']?>"><?=$sel_r['rank_name']?></option>;
    <?php endforeach; ?>
</select>

<label for="country_id">Страна</label>
<select id="country_id" name="country_id">
    <option selected>Выбрать...</option>
    <?php foreach ($select_country as $sel_c): ?>
        <option value="<?=$sel_c['country_id']?>"><?=$sel_c['country_name']?></option>;
    <?php endforeach; ?>
    <option value="0">Другая...</option>
</select>
<input id="input_country" type="text" placeholder="Введите название страны">