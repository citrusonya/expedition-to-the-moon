<?php
    include './../config/db.php';

    if(isset($_POST['id'])){
            $output_person = array();
            $stmt_person = $pdo -> prepare("SELECT * FROM users u
                                                LEFT JOIN specialization s on s.sp_id = u.sp_id
                                                LEFT JOIN rank r on r.rank_id = u.rank_id
                                                LEFT JOIN country c on c.country_id = u.country_id
                                                WHERE id = '".$_POST["id"]."' LIMIT 1");
            $stmt_person -> execute();
            $result_one_person = $stmt_person -> fetchAll();
    
            foreach($result_one_person as $r_o_p){
                $output_person['first_name'] = $r_o_p['first_name'];
                $output_person['last_name'] = $r_o_p['last_name'];
                $output_person['sp_id'] = $r_o_p['sp_id'];
                $output_person['rank_id'] = $r_o_p['rank_id'];
                $output_person['country_id'] = $r_o_p['country_id'];
            }
    
            echo json_encode($output_person);
        }

?>