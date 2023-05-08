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
            ENGINE = InnoDB;
            
            CREATE TABLE IF NOT EXISTS `perpus_master`.`buku` ( 
                `id_buku` INT NOT NULL AUTO_INCREMENT , 
                `isbn` VARCHAR(64) NOT NULL , 
                `judul` VARCHAR(64) NOT NULL , 
                `genre` VARCHAR(64) NOT NULL , 
                `synopsis` VARCHAR(64) NOT NULL , 
                `umur` VARCHAR(64) NOT NULL , 
                PRIMARY KEY (`id_buku`)) 
                ENGINE = InnoDB;
                
            CREATE TABLE IF NOT EXISTS `perpus_master'.`peminjaman` (
                `id_pinjam` INT NOT NULL AUTO_INCREMENT , 
                `id_member` INT NOT NULL , 
                `id_buku` INT NOT NULL , 
                `nama` VARCHAR(64) NOT NULL , 
                `judul` VARCHAR(64) NOT NULL , 
                `tgl_pinjam` DATE NOT NULL ,
                `bts_pinjam` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                PRIMARY KEY (`id_pinjam`)) 
                ENGINE = InnoDB
                ";
        
        if ($conn->query($query) == true) {
            //Create Database success
            $conn_db->query($queryTable);
            $settings->complete = true;
            $settings_json = json_encode($settings);
            file_put_contents('./script/settings.json', $settings_json);
        } else {
            echo "Error: " . $conn->error;
        }
    }
?>