<?php
    include './config/db.php';

    if(isset($_POST['id'])){
        $statement = $pdo -> prepare('DELETE FROM users WHERE id = :id');
        $result = $statement->execute(
            array(':id' => $_POST['id'])
        );

        if(!empty($result)){
            echo 'Статья удалена!';
        }
    }
?>