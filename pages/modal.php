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
                        <input type="text" name="first_name" placeholder="Александр" class="form-control" required value="<?php $valFirstName ?>">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Фамилия:</label>
                        <input type="text" name="last_name" placeholder="Орлов" class="form-control" required value="<?php $valLastName ?>">
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="rank">Должность</label>
                        <br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="1">
                            <label class="form-check-label">Командир</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="2">
                            <label class="form-check-label">Пилот</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="3">
                            <label class="form-check-label">Специалист миссии</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="4">
                            <label class="form-check-label">Бортинженер</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="5">
                            <label class="form-check-label">Инженер</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="6">
                            <label class="form-check-label">Кислородовод</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="7">
                            <label class="form-check-label">Электрик</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox" value="option3">
                            <label class="form-check-label">Гидролог</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="rank">Звание</label>
                        <select class="custom-select mr-sm-2" id="rank">
                            <option selected>Выбрать</option>
                            <option value="1">Младший</option>
                            <option value="2">Старший</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Страна:</label>
                        <input type="text" name="last_name" placeholder="Россия" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="operation" id="operation" />
                        <input type="submit" name="action" id="btn_action" class="btn btn-success" value="Add" />
                        <button type="button" id="btn_close" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>