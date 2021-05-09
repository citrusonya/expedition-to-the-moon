<?php
    include './../config/db.php';

    if(isset($_POST['id'])){
        $person_id = $_POST['id'];
        $statement = $pdo -> prepare('DELETE FROM users WHERE id = :id');
        $result = $statement->execute(
            array(':id' => $person_id)
        );

        if(!empty($result)){
            echo 'Запись удалена!';
        }
    }
?>