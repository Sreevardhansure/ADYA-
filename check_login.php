<?php
    include 'database_connection.php';
    session_start();
    $query = "
            SELECT user_session_id FROM login
            WHERE id = '".$_SESSION['id']."'

            ";
            $result = $connect->query($query);
    foreach($result as $row)
    {
        if(($_SESSION['user_session_id'] != $row['user_session_id']))
        {
            $data['output']='logout';
           // $data['output']='login';
        }
        else{
            $data['output']='login';
          //  $data['output']='logout';
        }
    }
    echo json_encode($data);
?>