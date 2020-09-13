<?php
    const host = "sample_host";
    const user = "sample_user";
    const password = 'sample_pass';
    const database = 'sample_db';

    function executeSql($sql){
        $link = mysqli_connect(host, user , password, database);
        if (!$link) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        $recordSet = mysqli_query($link, $sql);
        $data = mysqli_fetch_assoc($recordSet);
        mysqli_close($link);
        
        return $data;
    }