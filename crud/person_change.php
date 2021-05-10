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
 
        if($_POST['operation'] == 'Edit'){
            $statement = $pdo -> prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, 
                                            sp_id = :sp_id, rank_id = :rank_id, country_id = :country_id  WHERE id = :id');
            $result = $statement -> execute(
                array(
                    ':first_name' => $_POST["first_name"],
                    ':last_name' => $_POST["last_name"],
                    ':sp_id' => $_POST["sp_id"],
                    ':rank_id' => $_POST["rank_id"],
                    ':country_id' => $_POST["country_id"],
                    ':id'   => $_POST["id"]
                )
            );
        }
    }
?>