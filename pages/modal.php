<div id="userModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <form method="post" id="person_form">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Добавить запись</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="first_name">Имя:</label>
                        <input type="text" name="first_name" id="first_name" placeholder="Александр" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Фамилия:</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Орлов" class="form-control" required>
                    </div>
                    <?php
                        require_once('form_parts.php')
                    ?>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="operation" id="operation" />
                        <input type="submit" name="action" id="action" class="btn btn-success" value="Рекрутировать" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>