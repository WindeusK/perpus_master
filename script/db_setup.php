<?php
    $status_json = file_get_contents("./script/db_status.json");
    $status = json_decode($status_json);
    if ($status->complete == false) {
        require('./script/conn.php');

        $query = "CREATE DATABASE IF NOT EXISTS perpus_master";
        if ($conn->query($query) == true) {
            //Create Database success
            $status->complete = true;
            $status_json = json_encode($status);
            file_put_contents('./script/db_status.json', $status_json);
        } else {
            echo "Error: " . $conn->error;
        }
    }
?>