<?php
    //database connection.
    //needs four values:
        // 1.host
        // 2.username
        // 3.password
        // 4.table
    //these are being pulled from the .env file
    $dbc = mysqli_connect(getenv("DB_HOST"), getenv("DB_USER"), getenv("DB_PASS"), getenv("DB_TABLE"));
    if($dbc){
        // var_dump("Connection succesful");
        $dbc->set_charset("utf8");
    } else {
        die("ERROR! Connection failed. Please check your enviroment files and include the correct host, username, password and table.");
    }


 ?>
