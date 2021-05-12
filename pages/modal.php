<div class="modal_background"></div>
<div class="modal_window modal_change">
    <form method="POST" id="person_form">
        <h4>Информация о новом сотруднике</h4>
        <label for="first_name">Имя:</label>
        <input type="text" name="first_name" id="first_name" placeholder="Александр" required>
        <label for="last_name">Фамилия:</label>
        <input type="text" name="last_name" id="last_name" placeholder="Орлов" required>
        <?php
            require_once('form_parts.php')
        ?>
        <div class="modal_footer">
            <input type="hidden" name="id" id="id" />
            <input type="hidden" name="operation" id="operation" />
            <input type="submit" name="action" id="action" value="Взять в штат" class="btn btn_yellow" />
            <button type="button" class="btn btn_pink close_modal">Закрыть</button>
        </div>
    </form>
</div>