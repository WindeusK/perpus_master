<?php
    require('./script/settings.php');
    if ($settings->complete == false) {
        require('./script/conn.php');

        $query = "CREATE DATABASE IF NOT EXISTS perpus_master";
        $queryTable = "CREATE TABLE IF NOT EXISTS `perpus_master`.`member` ( 
            `id_member` INT NOT NULL AUTO_INCREMENT , 
            `nama` VARCHAR(64) NOT NULL , 
            `email` VARCHAR(64) NOT NULL , 
            `no_telp` VARCHAR(64) NULL DEFAULT NULL , 
            PRIMARY KEY (`id_member`)) 
            ENGINE = InnoDB; ";
        
        if ($conn->query($query) == true) {
            //Create Database success
            $conn->query($queryTable);
            $settings->complete = true;
            $settings_json = json_encode($settings);
            file_put_contents('./script/settings.json', $settings_json);
        } else {
            echo "Error: " . $conn->error;
        }
    }
?>