<?php
    require('./script/settings.php');
    if ($settings->complete == false) {
        require('./script/conn.php');

        $query = "CREATE DATABASE IF NOT EXISTS perpus_master";
        
        if ($conn->query($query) == true) {
            //Create Database success
            $settings->complete = true;
            $settings_json = json_encode($settings);
            file_put_contents('./script/settings.json', $settings_json);
        } else {
            echo "Error: " . $conn->error;
        }
    }
?>