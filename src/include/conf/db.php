<?php
    const host = "sample_host";
    const user = "sample_user";
    const password = 'sample_pass';
    const database = 'sample_db';

    function executeSql($sql){
        $mysqli = new mysqli(host, user , password, database);
        if (mysqli_connect_errno()) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            exit();
        }
        $result = $mysqli->query($sql);
        if ($result === false) {
            printf("Invalid query");
            exit();
        }
        $mysqli->close();
        return $result;
    }