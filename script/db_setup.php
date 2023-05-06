<?php
    $status_json = file_get_contents("db_status.json");
    $status = json_decode($status_json);
    if ($status->test) {
        echo "Hello world!";
    }
?>