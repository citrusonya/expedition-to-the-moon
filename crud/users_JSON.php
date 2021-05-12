<?php
    
    include_once('./config/db.php');

    $query = '';
    $output = array();
    $query .= 'SELECT * FROM users u
                    LEFT JOIN specialization s on s.sp_id = u.sp_id
                    LEFT JOIN rank r on r.rank_id = u.rank_id
                    LEFT JOIN country c on c.country_id = u.country_id 
                    ORDER BY id';

    $stmt = $pdo -> prepare($query);
    $stmt -> execute();
    $users = $stmt -> fetchAll();
    $data = array();
    $filtered_rows = $stmt -> rowCount();
    
    foreach($users as $u){

        $sub_array = array();
        $sub_array[] = '<tr><td class="table_col">'.$u['first_name'].'</td>';
        $sub_array[] = '<td class="table_col">'.$u['last_name'].'</td>';
        $sub_array[] = '<td>'.$u['sp_name'].'</td>';
        $sub_array[] = '<td>'.$u['rank_name'].'</td>';
        $sub_array[] = '<td>'.$u['country_name'].'</td>';
        $sub_array[] = '<td>
        <button class="btn_aqua edit" type="button" name="edit" 
            data-f-name="'.$u['first_name'].'" data-l-name="'.$u['last_name'].'" id="'. $u['id'].'">
            <ion-icon name="create-outline"></ion-icon>
        </button>
        <form method="POST">
            <button class="btn_pink delete" type="button" name="delete" 
                data-f-name="'.$u['first_name'].'" data-l-name="'.$u['last_name'].'" id="'. $u['id'].'">
                <ion-icon name="trash-outline"></ion-icon>
            </button>
        </form>
    </td>
</tr>';
        $data[] = $sub_array;
    }
    
    $output = array (
        "recordsFiltered" => get_total_all_records_users(),
        "data" => $data
    );
    
    echo json_encode($output);
?>