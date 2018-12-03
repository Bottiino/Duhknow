<?php
    $conn_string = "host=localhost port=5432 dbname=Duhknow user=postgres password=password";
    //Password
    // is whatever you set you psql password to be
    $db = pg_connect($conn_string);
    if(!$db)
    {
        echo "Error : Unable to open database\n";
    }
?>