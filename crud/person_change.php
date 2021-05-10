<?php
    include './../config/db.php';

    if(isset($_POST['operation'])){
 
        if($_POST['operation'] == 'Add'){
  
            $statement = $pdo -> prepare('INSERT INTO users (first_name, last_name, sp_id, rank_id, country_id) 
                                            VALUES (:first_name, :last_name, :sp_id, :rank_id, :country_id)');
            $result = $statement -> execute(
                array(
                    ':first_name' => $_POST['first_name'],
                    ':last_name' => $_POST['last_name'],
                    ':sp_id' => $_POST['sp_id'],
                    ':rank_id' => $_POST['rank_id'],
                    ':country_id' => $_POST['country_id']
                )
            );
        }
    }
?>